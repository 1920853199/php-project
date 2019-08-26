#!/bin/bash 

#列表
arr[0]=1557193559 #月亮与六便士
arr[1]=1557193550 #月亮与六便士
arr[2]=1557193551 #月亮与六便士
arr[3]=1557193552 #月亮与六便士
arr[4]=1557193555 #月亮与六便士
arr[5]=1557193553 #平凡的世界
arr[6]=1557193554 #平凡的世界
arr[7]=1557193556 #平凡的世界
arr[8]=1557193557 #平凡的世界
arr[9]=1557193558 #平凡的世界
arr[10]=1557193560 #假如我不曾见过太阳
arr[11]=1557193561 #活着
arr[12]=1557193562 #活着
arr[13]=1557193563 #活着
arr[14]=1557193571 #活出生命的意义
arr[15]=1557193572 #徐志摩诗文集
arr[16]=1557193573 #假如给我三天光明
arr[17]=1557193571 #阿甘正传
arr[18]=1557193572 #这个杀手不太冷
arr[19]=1557193573 #这个杀手不太冷

#数组数量
rand=${#arr[@]}

#随机数
arrindex=$(($RANDOM%$rand))

#名称ID
index=${arr[$arrindex]}

cp /home/wwwroot/1q84/index.html /home/wwwroot/1q84/index.html.copy
rm -rf /home/wwwroot/1q84/index.html
cp /home/wwwroot/1q84/$index.html /home/wwwroot/1q84/index.html

