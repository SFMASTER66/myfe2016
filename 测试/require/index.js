require(["./fs", './person'], function(file, p){
	// file.read();
	// var newPerson = require('./person');    //��require�У������֮ǰ�Ѿ����ع���һ���ļ����ټ���һ�߾ͻ�ӻ����ж���Ҳ�ͻ����һ��

	//var person1 = new p('lisi');
	//var person2 = new p('wangwu');
    //
	//person1.name = 'zhaoliu';
	//person2.sayHello();


	var person1=p;
	var person2=p;
	//person1.name = 'zhaoliu';
	person1.sayHello();
	console.log(person2.name);     //��Ϊ����ͬһ����������person1�ı�name��ʱ��Ҳ�͸ı���person2��name
});