 

    Elastic Search 

    search engine


    1) wget -qO - https://artifacts.elastic.co/GPG-KEY-elasticsearch | sudo apt-key add -
    2) sudo apt-get install apt-transport-https
    3) echo "deb https://artifacts.elastic.co/packages/7.x/apt stable main" | sudo tee /etc/apt/sources.list.d/elastic-7.x.list
    4) sudo apt-get update && sudo apt install elasticsearch
    5)  sudo systemctl start elasticsearch  
    6)  sudo systemctl enable elasticsearch
        localhost:9200

    7) sudo apt install kibana 
    8) sudo systemctl start kibana
    9)  sudo systemctl enable kibana

    http://localhost:5601/  



 http://localhost:5601/  

 http://localhost:5601/spaces/space_selector

1) sudo systemctl enable elasticsearch
 2) sudo systemctl start elasticsearch   or  

 3) sudo systemctl start kibana
 4) sudo systemctl enable kibana

########  2 #######

 1) open devtool in kibana in port localhost:5601
 2) check indices :- means DATABASE 

 3) GET _cat/indices?v=true
 4) Sample data import from SAMPLE FILE:- data already kibana_sample_data_logs , kibana_sample_data_flights, ecommerce 

 5) GET _cat/indices?help

 6) Insert 

 POST tutorial/_doc/1
 {
     "title":"code improve channel"
 }

7)  GET tutorial/_search
8) DELETE  tutorial/_doc/1

#############  3-1 #############

1) without id auto generate id
 POST codeimprove/_doc
{
  "title":"insta channel code",
  "des":"no desc NA"
} 

2) Partial Update some data 

POST codeimprove/_update/2
{
  "doc":{
    "des":"NO DESC/NA"
  }
}

3) http://localhost:9200/codeimprove/_search

search 
took :- taken time ms 
timed_out : timeout is false or true
shard : total shard 1

DELETE colleges
########### 3  May #
Mapping
curl -XDELETE localhost:9200/colleges

1) PUT colleges

2) POST colleges/_mapping
{
    "properties":{
        "student_name":{
            "type":"text"
        },
        "admission_no":{
            "type":"long"
        },
        "fees":{
            "type":"double",
            "index":false
        },
        "batch":{
            "type":"keyword"
        },
        "subject":{
            "type":"object",
            "properties":{
                "id":{
                    "type":"text"
                }
            }
        }
    }
}

3) POST colleges/_doc 
{
    "student_name":"Ram",
    "admission_no":"117",
    "fees":"1200000",
    "batch":["2020","2021"],
    "subject":{
        "id":"898"
    }

}
4) 
GET colleges/_mapping

GET  colleges/_search?q=117

#################  5 ##########

1) 
GET kibana_sample_data_ecommerce/_search
{
  "query": {
    "term": {
      "customer_gender": {
        "value": "FEMALE"
      }
    }
  }
}

2) or category
GET kibana_sample_data_ecommerce/_search
{
  "query": {
    "terms": {
      "sku": [ 
        "ZO0374603746"
      ]
    }
  }
}


3) 

GET kibana_sample_data_ecommerce/_search
{
  "query": { 
    "match": {
      "order_id": "584021"
    }
  }
}
   
 

4) object inside object
GET kibana_sample_data_ecommerce/_search
{
  "query": { 
    "match": {
      "products.product_id": "11238"
    }
  }
}

6) Range 
GET kibana_sample_data_ecommerce/_search
{
  "query": { 
    "range": {
      "total_quantity":  {
        "gte":6,
        "lte":8
      }
    }
  }
}

7) Multi select field 

GET kibana_sample_data_ecommerce/_search
{
  "query": { 
     "multi_match": {
       "query": "Wagdi",
       "fields": ["customer_first_name","customer_last_name"]
     }
  }
}
 

8) bool must match 
   
 
GET kibana_sample_data_ecommerce/_search
{
  "query": { 
     "bool": {
       "must": [
         {
           "match":{
             "customer_id": "39"
           }
         }
       ],
       
       "should": [
         {
           "match": {
             "customer_last_name": "Jenki11ns"
           }
         }
       ],
       
       "must_not": [
         {
           "match": {
             "customer_last_name": "Jenkins"
           }
         }
       ]
     }
  }
}

################  6 ############

1) DestCountry count by doc or DestWeather
GET kibana_sample_data_flights/_search
{
  "size": 0, 
  "aggs": {
    "DestCountrys": {
       "terms": {
         "field": "DestCountry",
         "size": 10
       }
    }
  }
}

1.1) 
 
GET kibana_sample_data_flights/_search
{
  "size": 0, 
  "aggs": {
    "DestCountrys": {
       "terms": {
         "field": "DestCountry",
         "size": 100
       },
       "aggs": {
         "DestWeatheraa": {
              "terms": {
               "field": "DestWeather",
               "size": 100
             }
         }
       }
    }
  }
}

2) count any field or DestWeather


GET kibana_sample_data_flights/_search
{
  "size": 0, 
  "aggs": {
    "DestCountrys": {
        "cardinality": {
          "field": "DestCountry"
        }
    }
  }
}

3) max ,min, avg,sum :- stats

GET kibana_sample_data_flights/_search
{
  "size": 0, 
  "aggs": {
     "Name":{
       "avg": {
         "field": "DistanceMiles"
       }
     }
  }
}

4) 

GET kibana_sample_data_flights/_search
{
  "size": 0, 
  "aggs": {
     "Name":{
       "date_histogram": {
         "field": "timestamp",
         "interval": "day"
       }
     }
  }
}

###########  7 #########
1) 
"fielddata": true
GET school/_search
{
  "query":{
      "bool": {
        "must": [
          {
            "match": {
              "fees": "1200000"
            }
          },{
            "terms": {
              "batch": ["2020"]
            }
          }
        ]
      }
  }
    
}

2) mapping update :-  "fielddata":true for sort
POST school/_mapping
{
  "properties" : {
        "admission_no" : {
          "type" : "long",
          "index" : false
        },
        "batch" : {
          "type" : "keyword"
        },
        "fees" : {
          "type" : "double"
        },
        "student_name" : {
          "type" : "text",
          "fielddata":true
        },
        "subject" : {
          "properties" : {
            "id" : {
              "type" : "text"
            }
          }
        }
      }
}

3) sort 
GET school/_search
{ 
  "sort": [
    {
      "admission_no": {
        "order": "desc"
      }
    }
  ] 
    
}

###############  8 ########### 

GET _cat/indices 
  
PUT colleges
  
GET colleges/_search 

POST colleges/_doc 
{
    "id":1002,
    "student_name":"Vishnu",
    "admission_no":"219",
    "fees":"17000",
    "batch":["2003","2004"],
    "subject":{
        "id":"898"
    }

}

DELETE colleges
 
1) Update By query:- 
POST colleges/_update_by_query
{
    "script": { 
    "source": "ctx._source['admission_no'] = '200012'", 
    "lang": "painless",
    "params": {
      "tag":{
        "feess":"11112"
      }
    }
  },
    "query": {
    "term": {
      "id": "1002"
    }
  },
  "max_docs": 1
}

2) multiple record update
"script" : "ctx._source.fees = \"10\"; ctx._source.student_name = \"tt\";",
or 
"script": { 
    "source": "ctx._source['fees'] = '4040';ctx._source['student_name'] = 'Vishnu'"
  },

  3) delete by query 
  DELETE  tutorial/_doc/1
  POST colleges/_delete_by_query
{
    
    "query": {
    "term": {
      "id": "1003"
    }
  }
}


#########  8 ########

1) multi fetch index data 
 
GET _mget
 {
   "docs":[{
     "_index":"school",
     "_type":"doc",
     "_id":5
   },{
       "_index":"colleges",
     "_type":"doc",
     "_id":1002
   }]
 }

 2) search all index
 GET _all/_search?q=student_name:"Mahesh Singh"
or 
GET _all/_search
 {
   "query": {
      "match": {
      "student_name": "Mahesh"
    }
   }
 }

 3) like 
 GET _all/_search
 {
   "query": {
       "wildcard":{
         "student_name":"*de"
       }
   }
 }

 4) or  code or singh / match_phrase for complete search
 GET school/_search
{
  "query": {
    "match": {
      "student_name": "code Singh"
    }
  }
}
5)  match_phrase:- for complete search
GET school/_search
{
  "query": {
    "match_phrase": { 
      "student_name" : "Hariom"
    }
  }
}
or 
slop 
GET school/_search
{
  "query": {
    "match_phrase": { 
      "student_name" : {
        "query": "Vishnu Singh",
        "slop": 2
      }
    }
  }
}
6) match_phrase_prefix : start or end search



  9 
 https://www.youtube.com/watch?v=poERWnPrscc&list=PLGZAAioH7ZlO7AstL9PZrqalK0fZutEXF&index=6


 #############  10 ##########


GET kibana_sample_data_ecommerce/_search
{
  "query": {
   "match": {
     "customer_full_name.keyword": "Eddie Underwood"
   }
  }
}

 GET school/_search
{
  "query": {
    "match": {
      "student_name":  "Ram"
    }
  }
}
 
 
 GET office/_search
{
  "query": {
    "match": {
      "student_name":  "Ram"
    }
  }
}
 

 ######## 11 #####
1) term
GET school/_search
{
  "query": {
    "term": {
      "fees":  "1900000"
    }
  }
} 
2)  
1) query_string 
GET school/_search
{
  "query": {
    "query_string": {
      "default_field": "student_name",
      "query": "*",
      "default_operator": "AND"
    }
  }
} 
2) 
GET office/_search
{
  "query": {
    "query_string": {
      "fields": ["emp_last","emp_first"],
      "query": "Bhagat",
      "default_operator": "OR"
    }
  }
}



######### React Native #########
1) cd ~
2) curl -sL https://deb.nodesource.com/setup_14.x -o nodesource_setup.sh
3) sudo apt-get install cpu-checker
4) egrep -c '(vmx|svm)' /proc/cpuinfo 
5)  kvm-ok 
6)  sudo /usr/sbin/kvm-ok


 