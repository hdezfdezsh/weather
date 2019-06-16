#!/usr/bin/env python
# coding: utf-8

# In[8]:


import requests
import sys
import json


# In[93]:


class Buscar:
    def __init__(self,x):
        url="https://api.openweathermap.org/data/2.5/weather?q="+x+"&appid=48cc87c04dbd9b9d7fd3985840cf5533" 
        datos=requests.get(url)
        tiempo = json.loads(datos.text)
        
        nombre=tiempo['name']
        temp=tiempo['main']['temp']
        presion=tiempo['main']['pressure']
        humedad=tiempo['main']['humidity']
        temp_min=tiempo['main']['temp_min']
        temp_max=tiempo['main']['temp_max']
        pais=tiempo['sys']['country']
        principal=tiempo['weather'][0]['main']
        
        temperatura=float(temp)-273.15
        maxima=float(temp_max)-273.15
        minima=float(temp_min)-273.15
        
        lista=[nombre, temperatura, presion, humedad, maxima, minima, pais, principal]
              
        print(lista)

result = sys.argv[1]
buscar = Buscar(result)

