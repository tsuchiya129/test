
public class Test {

	public static void main(String[] args) {
		Person taro=new Person();
		taro.name="taro";
		taro.age=18;
		System.out.println(taro.name);
		System.out.println(taro.age);

		Person jiro=new Person("jiro",20);
		System.out.println(jiro.name);
		System.out.println(jiro.age);

		Person hanako=new Person("hanako");
		System.out.println(hanako.name);
		System.out.println(hanako.age);

		Person nu=new Person(25);
		System.out.println(nu.name);
		System.out.println(nu.age);

		Person saburo=new Person(17,"saburo");
		System.out.println(saburo.age);
		System.out.println(saburo.name);
	}

}
