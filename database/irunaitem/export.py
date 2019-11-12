import sqlite3

con = sqlite3.connect('item.db')
with open('item.sql', 'w') as f:
    for line in con.iterdump():
        f.write('%s\n' % line)