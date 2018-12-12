
public class Test {

	public static void main(String[] args) {
		Person taro=new Person();
		taro.name="山田太郎";
		taro.age=20;
		taro.phoneNumber="090-3333-3333";
		taro.address="abcd@softbank.ne.jp";

		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.talk();
		taro.walk();
		taro.run();


		taro.name="木村次郎";
		taro.age=33;

	    System.out.println(taro.name);
	    System.out.println(taro.age);
	    taro.talk();
	    taro.walk();
	    taro.run();

	    taro.name="鈴木花子";
	    taro.age=17;

	    System.out.println(taro.name);
	    System.out.println(taro.name);


		Robot ai=new Robot();

		ai.name="aibo";
		ai.talk();
		ai.walk();
		ai.run();

		ai.name="asimo";
		ai.talk();
		ai.walk();
		ai.run();

	}
}
