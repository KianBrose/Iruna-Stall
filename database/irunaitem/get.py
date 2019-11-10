import sqlite3
conn = sqlite3.connect('item.db')
c = conn.cursor()
for row in c.execute('SELECT * FROM irunaitem'):
        print(row)