
public class Person {

	private String name=null;
	private int age=0;

	public Person(String name, int age){
		this.name=name;
		this.age=age;
	}
//まずはコンストラクタでしっかり定義してあげる
	public String getName(){
		return this.name;
	}
	public void setName(String name){
		this.name=name;
	}

	public int getAge(){
		return age;
	}
	public void setAge(int age){
		this.age=age;
	}
}