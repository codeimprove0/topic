

Django (jango)

1) Django is Python web framework (website, api )
    framework:  standard way write every code clean 
2) MVT pattern (Model View Template)
    Model : interface of your data (db related , fetch save delete)
    View : User Interface  see in your browser (like this url render this page)
    Template : html page where we can set dyamic content like form list

                    Model
    Url:--- View <--> bidirectional
                    Template
  
--------------------------------------------------------------------------------
 Install command 
 1) pip 
 $ sudo apt install python3-pip -y 
 $ update-alternatives --install /usr/bin/pip pip /usr/bin/pip3 1 
 $ pip --version

 Then 
  pip install django 
  pip freeze (check django install ) 
  django-admin   if error then run step 2

 Step 2 - Install Django Framework

 $ apt show python3-django
 $ apt install python3-django
 $ django-admin --version
 
 -----------------------------------------------------------------------------------

 Create Project 
  $ django-admin
  $   django-admin startproject dj

  Run Project 
  cd /var/www/html/code/dj 
  python manage.py runserver

  http://127.0.0.1:8000
  http://127.0.0.1:8000/admin/

VS code 

1) install extension 
    python 
    django

=============================================================  
Video 2 
python manage.py runserver

Create Folder for Django Application

1) db.sqlite : by default use sqlite db 
2) same name folder inside folder like dj 
3) manage.py main file which help to run your project 
    or for make,mode,migration then use this file  

4) In settings.py file 
    1) DEBUG : true if any error give show if false no show error 
    2) ALLOWED_HOSTS : url site url or for localhost
    3) INSTALLED_APPS : default table ati h migrate ke time pr vo yaha se chli jati h
    4) MIDDLEWARE : security purpose ke liye direct url ko access na krle , security purpose 
    5) TEMPLATES : created template path assign in thi variable
    6) DATABASES: database setting default db is "sqlite"
    7) AUTH_PASSWORD_VALIDATORS : password validator using this validate password 
    8) STATIC_URL : static path provide where static image, css js  ye file rkhoge 

5) Urls.py 
    1) its manage your site all urls 
    2) all type of pattern assign in urlpatterns variable  

--------------------------------------------------  
Video 3 
View & url 
1) create views.py file in near location urls.py 

from  django.http import HttpResponse

def home(request):
    return HttpResponse('Home Page')   
    
    
2) in views.py add 
 
from dj import views

urlpatterns = [
    url(r'^admin/', admin.site.urls),
    url('home/',views.home),
    url('contact-us/',views.contactUs)
]

same copy for contact-us 

in views.py 
def contactUs(request):
    return HttpResponse('Contact US Page')

3) Create Dynamic Url 
    


----------------------------------------------------------  
Video ## 
Migrate DB 

before run check db.slite3
$ python manage.py migrate 
after run check db.slite3

2) create super user 
python manage.py createsuperuser