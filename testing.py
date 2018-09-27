import pymysql
conn=pymysql.connect(host='localhost', user='root', password='', db='abc')

cur=conn.cursor()

#sql='SELECT * from `composition`;'
#cur.execute(sql)

#sql='DELETE from `composition` where Gas="no2"'
#cur.execute(sql)

sql='delete from `composition` where flag=1;'
cur.execute(sql)

sql='select * from composition'
cur.execute(sql)
for row in cur:
    print(row)

#sql='create table flagsonly(gas varchar(15), flag int(2))'
#cur.execute(sql)

#cur.execute('desc flagsonly')
#data=cur.fetchall()
#print(data)
#for row in cur:
 #   print(row)


