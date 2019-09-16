package Kadai;

public class Word {
    protected String name;
    protected String meaning;

    public Word(){
        name="";
        meaning="";
    //    System.out.println("分からなかった単語とその意味をスペースで区切って入力してください。");
    }

    public void setCar(String n, String g){
        name= n;
        meaning= g;
        System.out.println("単語："+name+" 　　意味："+meaning);
    }

    public String toString(){
        return "単語は"+this.name+ "意味は"+ this.meaning;
    }
}
