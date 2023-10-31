
const dbConfig  = require(CONFIG_PATH + 'db.config');
const {FETCH_LIMIT} = require(`${CONFIG_PATH}config`);
const elasticClient = dbConfig.elasticClient;
const _ = require("lodash");
class manageActions {
    constructor() {
    }
}
 
// get lead data 
manageActions.getLeads = async(index,filterData={},report_type)=> {
    try {
        //console.log("filterData",filterData)
        let mustquery=[],shouldQuery=[],filterQuery=[],mustNotQuery=[];
 
        if(filterData.team_level && filterData.user_id){
            shouldQuery=[
                {
                    match:{
                        gcloud_user_id:filterData.user_id
                    }
                }
            ] 
        }  
        mustquery.push({
            "terms": {
                "rbh_id" : rbh_ids
            }
        })

        if(bro_agent_ids.length){
            for (const singleUserId of bro_agent_ids) {
                
                shouldQuery.push({
                    match:{
                        bro_id:singleUserId
                    }
                },
                {
                    match:{
                        agent_id:singleUserId
                    }
                });
            }
        } 
            for (const singlestage of filter4stage) {

                filterQuery.push({
                    "range": {
                        [singlestage]: {
                            "gte": filterData.from_date,
                            "lte": filterData.to_date
                        }
                    }
                }); 
            }  
             

        if(shouldQuery.length || mustNotQuery.length){
            mustquery.push({
                "bool":{
                    "should":shouldQuery,
                    "must_not":mustNotQuery
                }
            })
        }
        
        let boolQuery={
            must:mustquery
        }
        
        if(filterQuery.length)boolQuery.filter={
            "bool":{
                should:filterQuery
            }
        }; 
        const result = await elasticClient.search({
            index: index,
            size:+FETCH_LIMIT,
            body: {
                "query":{
                    "bool":boolQuery
                }
            },
          });
          return {result,filteredUserObj};
    } catch (error) {
        throw error;
    }   
}
module.exports = manageActions;


/* 

1) 
http://10.30.10.22:9200/performance_report_leads/


{
  "_source": [
    "paid_to_dealer_date",
    "agent_id"
  ],
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-03-01",
              "lte": "2023-03-31"
            }
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 50,
  "sort": [],
  "aggs": {}
}


---------------------------- 
2) 

{
  "_source": [
    "paid_to_dealer_date",
    "agent_id"
  ],
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-03-01",
              "lte": "2023-03-31"
            }
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 50,
  "aggs": {
    "latest_time_stamp": {
      "top_hits": {
        "_source": [
          "paid_to_dealer_date",
          "agent_id"
        ],
        "sort": [
          {
            "paid_to_dealer_date": {
              "order": "desc"
            }
          }
        ],
        "size": 7
      }
    }
  }
}


3) almost done 
{
  "_source": [
    "paid_to_dealer_date",
    "agent_id"
  ],
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-03-01",
              "lte": "2023-03-31"
            }
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 0,
  "aggs": {
    "distinct_am_id": {
      "terms": {
        "field": "agent_id"
      },
      "aggs": {
        "max_loan": {
          "terms": {
            "field": "paid_to_dealer_date",
            "size": "2"
          }
        }
      }
    }
  }
}


4) DONE:--------------------- 

{
  "_source": [
    "paid_to_dealer_date",
    "agent_id"
  ],
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-03-01",
              "lte": "2023-03-31"
            }
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 0,
  "aggs": {
    "distinct_am_id": {
      "terms": {
        "field": "agent_id"
      },
      "aggs": {
        "latest_date": {
          "max": {
            "field": "paid_to_dealer_date"
          }
        }
      }
    }
  }
}

5) Perfect with business line 

{
  "_source": [
    "paid_to_dealer_date",
    "agent_id"
  ],
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-03-01",
              "lte": "2023-03-31"
            }
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 0,
  "aggs": {
    "distinct_am_id": {
      "terms": {
        "field": "agent_id"
      },
      "aggs": {
        "business_type": {
          "terms": {
            "field": "business_line.keyword"
          },
          "aggs": {
            "latest_record": {
              "min": {
                "field": "paid_to_dealer_date"
              }
            }
          }
        }
      }
    }
  }
}




6) FINAL RESULT after aggr get all record :- 

{
  "_source": [
    "paid_to_dealer_date",
    "agent_id"
  ],
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-03-01",
              "lte": "2023-03-31"
            }
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 0,
  "aggs": {
    "distinct_am_id": {
      "terms": {
        "field": "agent_id"
      },
      "aggs": {
        "latest_user": {
          "top_hits": {
            "sort": [
              {
                "paid_to_dealer_date": {
                  "order": "desc"
                }
              }
            ],
            "size": 1,
            "_source": {
              "include": [
                "lead_id",
                "paid_to_dealer_date",
                "business_line"
              ]
            }
          }
        }
      }
    }
  }
}














{
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-03-01",
              "lte": "2023-03-31"
            }
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 0,
  "aggs": {
    "distinct_am_id": {
      "terms": {
        "field": "agent_id"
      },
      "aggs": {
        "latest_user": { 
          "top_hits": {
             "_source": {
              "include": [ "lead_id", "paid_to_dealer_date",  "business_line"  ]
            },
            "sort": [
              {
                "paid_to_dealer_date": {
                  "order": "desc"
                }
              }
            ],
            "size": 1
          }
        }
      }
    }
  }
}




############################################### 
Video 


POST /my_index/_search
{
  "aggs": {
    "user_id": {
      "terms": {
        "field": "user_id"
      },
      "aggs": {
        "latest_time_stamp": {
          "top_hits": {
            "sort": [
              {
                "paid_to_dealer_date": {
                  "order": "desc"
                }
              }
            ],
            "size": 1
          }
        }
      }
    }
  }
}







"aggs": {
    "distinct_am_id": {
        "terms": {
            "field": "agent_id"
        }
    },
    "include_source": {
        "top_hits": {
          "size": 1,
          "_source": {
            "include": [
             "agent_id", "paid_to_dealer_date", "distinct_am_id"
            ]
          }
        }
      }
}


"byDay" : {
    "date_histogram" : {
        "field" : "paid_to_dealer_date",
        "calendar_interval" : "1d",
        "format" : "yyyy-MM-dd" 
    }
}

"include_source": {
    "top_hits": {
      "size": 1,
      "_source": {
        "include": [
          "date", "ip", "dev_type", "env", "cpu_usage"
        ]
      }
    }
  }


  GET /<your index>/_search
{
  "size": 0,
  "aggs": {
    "distinct_userids": {
      "terms": {
        "field": "agent_id",
        "size": 1000
      }
    }
  }
}


{
    "size":0,
    "aggregations": {
      "first_by_investor": {
        "terms": {
          "field": "investor"
        },
        "aggregations": {
          "then_by_company": {
            "terms": {
              "field": "company"
            }
          }
        }
      }
    }
  }

******************************************************************
******************************************************************
-------------------------- BEST Inside aggr to aggr or select filed 
1) one
{
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-04-01",
              "lte": "2023-04-30"
            }
          }
        },
        {
          "terms": {
            "agent_id": [
              25225,
              24937
            ]
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 0,
  "sort": [],
  "aggs": {
    "agent_ids": {
      "terms": {
        "field": "agent_id"
      },
      "aggs": {
        "vishnu_details": {
          "top_hits": {
            "sort": [
              {
                "paid_to_dealer_date": {
                  "order": "desc"
                }
              }
            ],
            "size": 1,
            "_source": {
              "include": [
                "agent_id",
                "paid_to_dealer_date",
                "distinct_am_id"
              ]
            }
          }
        }
      }
    }
  }
}

**************************************************************
****************************************************************
2) Inside agent aggr then lead_souce aggr then field select

{
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-04-01",
              "lte": "2023-04-30"
            }
          }
        },
        {
          "terms": {
            "agent_id": [
              25225,
              24937
            ]
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 0,
  "sort": [],
  "aggs": {
    "agent_ids": {
      "terms": {
        "field": "agent_id"
      },
      "aggs": {
        "vishnu_details": {
          "top_hits": {
            "sort": [
              {
                "paid_to_dealer_date": {
                  "order": "desc"
                }
              }
            ],
            "size": 1,
            "_source": {
              "include": [
                "agent_id",
                "paid_to_dealer_date",
                "distinct_am_id"
              ]
            }
          }
        },
        "lead_source": {
          "terms": {
            "field": "lead_source.keyword"
          }
        }
      }
    }
  }
}

++++++++++++++++++++++++++++++++++++++++++++++++++++
**************************************************
*****************************************************
3) Aggs by agent then :- aggr by lead Source & aggr by lead amount sum the field select

{
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-04-01",
              "lte": "2023-04-30"
            }
          }
        },
        {
          "terms": {
            "agent_id": [
              25225,
              24937
            ]
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 0,
  "sort": [],
  "aggs": {
    "agent_ids": {
      "terms": {
        "field": "agent_id"
      },
      "aggs": {
        "vishnu_details": {
          "top_hits": {
            "sort": [
              {
                "paid_to_dealer_date": {
                  "order": "desc"
                }
              }
            ],
            "size": 1,
            "_source": {
              "include": [
                "agent_id",
                "paid_to_dealer_date",
                "distinct_am_id"
              ]
            }
          }
        },
        "lead_source": {
          "terms": {
            "field": "lead_source.keyword"
          }
        },
        "amount_total": {
          "sum": {
            "field": "loan_disbursed_amount"
          }
        }
      }
    }
  }
}
*/

// ############################################ 


/* 

DELETE 
25225,  24937  :-- 2023-04-01


1) =---------------------------------

{
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-04-01",
              "lte": "2023-04-30"
            }
          }
        },
        {
          "terms": {
            "agent_id": [
              25225,
              24937
            ]
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 100,
  "sort": [],
  "aggs": {}
}



2) =====================

{
  "query": {
    "bool": {
      "must": [
        {
          "range": {
            "paid_to_dealer_date": {
              "gte": "2023-04-01",
              "lte": "2023-04-30"
            }
          }
        },
        {
          "terms": {
            "agent_id": [
              25225,
              24937
            ]
          }
        }
      ],
      "must_not": [],
      "should": []
    }
  },
  "from": 0,
  "size": 0,
  "sort": [],
  "aggs": {
    "distinct_am_id": {
      "terms": {
        "field": "agent_id"
      }
    },
    "include_source": {
      "top_hits": {
        "size": 2,
        "_source": {
          "include": [
            "agent_id",
            "paid_to_dealer_date",
            "distinct_am_id"
          ]
        }
      }
    }
  }
}

*/