import pymysql

conn=pymysql.connect(host='localhost', user='root', password='', db='abc')

a=conn.cursor()

sql='SELECT * from `composition`;'
a.execute(sql)

#countrow=a.execute(sql)
#print("Number of rows: ", countrow)
data=a.fetchall()
print(data)

#sql="INSERT INTO composition (Gas, amount, flag) VALUES (%s, %s, %s);"
#val=("so2", 19, 1)
#a.execute(sql,val)
#conn.commit()

#a.execute('SELECT * from `composition`;')
#data=a.fetchall()
#print(data)

#for row in a:
#    print ("\n")
#    print (row)

#sql="DROP TABLE parth"
#a.execute(sql)
#conn.commit()

#sql="DELETE from composition where amount=15"
#a.execute(sql)
#conn.commit()

sql="select gas,amount from composition where flag=1"
a.execute(sql)
print("\n")
for row in a:
    print(row)
conn.commit()
