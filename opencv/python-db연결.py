import pymysql

conn = pymysql.connect(host='localhost', user='root', password='1234',db='park', charset='utf8')

curs = conn.cursor()

sql = "insert into parking_area (car_num,parking_area_location) values(%s,%s)"

val = ("13가 1234","나-1")



curs.execute(sql,val)

conn.commit()


#conn.close()
