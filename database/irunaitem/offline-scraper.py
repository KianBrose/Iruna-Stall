#Python program to scrape website 
import requests 
from bs4 import BeautifulSoup 
import csv 
import sqlite3
import re

recovery_html = BeautifulSoup(open("status-items.html"), 'html5lib') 
status_html = BeautifulSoup(open("relic-scrape.html"), 'html5lib')

#print(soup.prettify)

items = [];

recovery_items = [];
for recovery_item in recovery_html.find_all('a'):
	recovery_items.append(recovery_item.get_text())

status_items = [];
for status_item in status_html.find_all('a'):
	status_items.append(status_item.get_text())

items.append(recovery_items);

#items.append(status_items)
conn = sqlite3.connect('item.db')
c = conn.cursor()
c.execute('''CREATE TABLE IF NOT EXISTS irunaitem
             (id int PRIMARY_KEY AUTO_INCREMENT, name text, category text);''')
#print(items);

item_list = []
for i in status_items:
	x = i.split("[]")
	for j in x:
		bracket = re.findall("\[(.*?)\]", j)
		a = " ".join(bracket)
		y = j.replace("[RelicCrystas]", "")
		item_list.append((y, a))
print(item_list)
	


# Insert a row of data
c.executemany('INSERT INTO irunaitem VALUES (NULL, ? ,?)', item_list)

# Save (commit) the changes
conn.commit()


conn.close()
