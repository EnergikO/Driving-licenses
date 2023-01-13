# Car Accounting System

[🇷🇺 Русский](#rus)  
[🇺🇸 English](#eng)  

## RUS
## Содержание
* [Протокол обмена данными](#протокол-обмена-данными)
    * [Входные данные](#входные-данные)
    * [Выходные в ответе](#выходные-данные)
* [Модели](#модели)
    1. [Человек](#человек)
    2. [Водительское Удостоверение (ВУ)](#водительское-удостоверение--ву-)
    3. [Машина](#машина)
* [Примеры api запросов](#примеры-api-запросов)

## Протокол обмена данными
### Входные данные
    Для передачи данных в запрос просто используйте JSON формат  
    Тем не менее, вы можете использовать GET параметры, если вам это нужно  

### Выходные данные
    Сервер на выходе использует JSON формат

Сервер **всегда** возвращает статус  
> `status: 'success' | 'fail'`  

Помимо статуса, также всегда будут возвращаться какие-то данные (в [документации](documentation/) можно узнать какие именно данные возвращает конкретный запрос)  
> `data: {'key': 'value'}`  

    Пожалуйста, учитывайте, что если данных нет, параметр будет передан со значением NULL

А ещё иногда сервер может вернуть сообщение (например, если что-то пошло не так)  
> `message: 'Car with id='Optimus Prime' was not found.'`  

## Модели
### Человек
* id
* passport_key
* first_name
* last_name
* phone_number (строка)
* gender (Их только два, не  забывайте)
***

### Водительское Удостоверение (ВУ)
* id
* passport_key
* first_name
* last_name
* gender (Их только два, не  забывайте)
* expiration_date (дата)
* vehicle_type
***

### Машина
* id
* brand
* model
* vehicle_type
* weight (тонны)
* max_weight (тонны)
* type_of_drive
* engine_layout
* fuel_type
* power
* fuel_consumption
* state_license_plate
* owner_id (человек) (многие к одному)
* created_at
* updated_at

## Примеры api запросов
#### Все примеры ищите [в папке](examples/)

***

## ENG
## Content
* [Communication protocol](#communication-protocol)
    * [Input](#input)
    * [Output](#output)
* [Models](#models)
    1. [Person](#person)
    2. [Driver's License](#drivers-license)
    3. [Car](#car)
* [API request examples](#api-request-examples)

## Communication protocol
### Input
    To pass data to the request, just use the JSON format
    However, you can use GET parameters if you need to.

### Output
    The server output uses JSON format

The server **always** returns a status
> `status: 'success' | 'fail'`

In addition to the status, some data will also always be returned (in the [documentation](documentation/) you can find out exactly what data a particular request returns)
> `data: {'key': 'value'}`

    Please note that if there is no data, the parameter will be passed with a NULL value

And sometimes the server may return a message (for example, if something went wrong)
> `message: 'Car with id='Optimus Prime' was not found.'`

## Models
### Person
* id
* passport_key
* first_name
* last_name
* phone_number (string)
* gender (There are only two, don't forget)
***

### Driver's License
* id
* passport_key
* first_name
* last_name
* gender (There are only two, don't forget)
* expiration_date (date)
* vehicle_type
***

### Car
* id
* brand
* model
* vehicle_type
* weight (tons)
* max_weight (tons)
* type_of_drive
* engine_layout
* fuel_type
* power
* fuel_consumption
* state_license_plate
* owner_id (person) (many to one)
* created_at
* updated_at

## API request examples
#### Look for all examples [here](examples/)
