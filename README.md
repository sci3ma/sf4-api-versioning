sf4-api-versioning
=================================================
Example of API versioning on Symfony Framework v4


Used additional bundles
-------------
* friendsofsymfony/rest-bundle
* jms/serializer-bundle
* sci3ma/sf4grumphp (optional)

Steps to create project
------------------
1. Create `Resource/config/api_routing.yaml` for controllers routes
1. Include `Resource/config/api_routing.yaml` into `config/routes.yaml`
    1. Add proper prefix with `version` parameter
    1. Add available/supported versions in `.env` file
1. Create Entity with properties:
    1. id
    1. name
    1. age
    1. color
1. Create Controller and define RESTful actions


Run project
-----------
1. Run build-in php server `bin/console server:start`
1. Go to:
    1. `[GET] 127.0.0.1:8000/api/v1.1/godzillas/1` and see response with properties:
        1. id
        1. name
        1. age
    1. `[GET] 127.0.0.1:8000/api/v1.2/godzillas/1` and see response with properties:
        1. id
        1. name
        1. age
        1. color 
    1. `[GET] 127.0.0.1:8000/api/v1.3/godzillas/1` and see response with properties:
        1. id
        1. name
        1. age
        1. full_name - which is virtual property
1. Similarly as example above:
    1. `[GET] http://127.0.0.1:8000/api/v1.1/godzillas`
    1. `[GET] http://127.0.0.1:8000/api/v1.2/godzillas`
    1. `[GET] http://127.0.0.1:8000/api/v1.3/godzillas`


Conclusion
----------
The main goal of versioning api is changing/updating response structure with keeping the older version in the same time.