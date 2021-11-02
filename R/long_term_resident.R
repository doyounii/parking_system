#48시간 이상 주차한 차량의 차량 번호 추출
library(rJava)
library(RJDBC)
jdbcDriver <- JDBC(driverClass = "oracle.jdbc.OracleDriver", 
                   classPath = "C:/oraclexe/app/oracle/product/11.2.0/server/jdbc/lib/ojdbc6.jar")

con <- dbConnect(jdbcDriver,
                 "jdbc:oracle:thin:@localhost:1521:xe",     
                 "HR","1234")     
query <- "select car_num from parking where total_time >2880" 
result <- dbGetQuery(con, query)
head(result)
