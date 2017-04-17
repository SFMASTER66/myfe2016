require(["./fs", './person'], function(file, p){
	// file.read();
	// var newPerson = require('./person');    //在require中，如果是之前已经加载过的一次文件，再加载一边就会从缓冲中读，也就会加载一次

	//var person1 = new p('lisi');
	//var person2 = new p('wangwu');
    //
	//person1.name = 'zhaoliu';
	//person2.sayHello();


	var person1=p;
	var person2=p;
	//person1.name = 'zhaoliu';
	person1.sayHello();
	console.log(person2.name);     //因为引用同一个对象，所以person1改变name的时候，也就改变了person2的name
});