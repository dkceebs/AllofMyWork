package Kadai;

import java.util.ArrayList;

public class colLesson04 {
    public static void main(String[] args) {

        //Word[] words = new Word[10];
        ArrayList<Word>words = new ArrayList<>();

        System.out.println("分からなかった単語とその意味をスペースで区切って入力してください。");
        int i = 0;

        while (i < 100) {

            // 入力する
            String input = new java.util.Scanner(System.in).nextLine();
            System.out.println(input);

            if (input.equals("e")) {
                System.out.println("処理を終了します");
                for(int j = 0; j< i; j++) {
                    // 入力した回数だけ繰り返したい
                    //System.out.println(words[j].toString());
                    System.out.println(words.get(j).toString());
                }
                //System.out.println(i + "件、登録しました。");
                System.out.println(words.size() + "件、登録しました。");
                System.exit(0);
            } else {
                // 分割する。2回以上にも分割できる。
                String[] separatedInput = input.split(" ");
                //Wordを実体化
                Word word = new Word();
                //Wordの名前
                word.name = separatedInput[0];
                //Wordの意味
                word.meaning = separatedInput[1];

                //words[i] = word;
                //words.add(word);

                System.out.println("次の単語と意味を入力してください。eで終了します。");

                try{
                    //words[i] = word;
                    words.add(word);
                }
                catch (IndexOutOfBoundsException e){
                    System.out.println("登録制限を越えました。登録済みのデータは以下になります。");
                    break;
                }
            }
            i++;
        }
    }
}
