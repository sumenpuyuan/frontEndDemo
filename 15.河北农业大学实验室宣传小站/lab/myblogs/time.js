
					function show_cur_times(){
						//��ȡ��ǰ����
						 var date_time = new Date();
						 //��������
						 var week;
						 //switch�ж�
						 switch (date_time.getDay()){
						case 1: week="����һ"; break;
						case 2: week="���ڶ�"; break;
						case 3: week="������"; break;
						case 4: week="������"; break;
						case 5: week="������"; break;
						case 6: week="������"; break;
						default:week="������"; break;
						 }
						 //��
						 var year = date_time.getFullYear();
						  //�ж�С��10��ǰ�油0
						   if(year<10){
						  year="0"+year;
						 }
						 //��
						 var month = date_time.getMonth()+1;
						  //�ж�С��10��ǰ�油0
						  if(month<10){
						month="0"+month;
						 }
						//��
						 var day = date_time.getDate();
						  //�ж�С��10��ǰ�油0
						   if(day<10){
						  day="0"+day;
						 }
						 //ʱ
						 var hours =date_time.getHours();
						 //�ж�С��10��ǰ�油0
						   if(hours<10){
						  hours="0"+hours;
						 }
						 //��
						 var minutes =date_time.getMinutes();
						 //�ж�С��10��ǰ�油0
							if(minutes<10){
						  minutes="0"+minutes;
						 }
						  //��
						 var seconds=date_time.getSeconds();
						 //�ж�С��10��ǰ�油0
						  if(seconds<10){
						  seconds="0"+seconds;
						 }
						 //ƴ��������ʱ����
						 var date_str = year+"��"+month+"��"+day+"�� "+hours+":"+minutes+":"+seconds+" "+week;
						//��ʾ��idΪshowtimes��������
						 document.getElementById("showtimes").innerHTML= date_str;
						}
						 //����1�����һ��show_cur_times����
						setInterval("show_cur_times()",100);
	
	