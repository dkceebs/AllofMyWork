package Kadai;

//////////////////////////////////////////////////////////////////////////////////////////////
// 課題1番目//

class colLesson01practice {
    public static void main(String[] args) {

        Word[] words = new Word[10];


        System.out.println("分からなかった単語とその意味をスペースで区切って入力してください。");
        int i = 0;

        while (i < 10) {

            // 入力する
            String input = new java.util.Scanner(System.in).nextLine();
            System.out.println(input);

            if (input.equals("e")) {
                System.out.println("処理を終了します");
                for (int j = 0; j < i; j++) {
                    // 入力した回数だけ繰り返したい
//                   words[j].toString();
                    System.out.println("単語：" + words[j].name + "意味：" + words[j].meaning);
                }
                System.out.println(i + "件、登録しました。");
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

                words[i] = word;

                System.out.println("次の単語と意味を入力してください。eで終了します。");
                if(i==9) {
                    for (int j = 0; j < i; j++) {
                        System.out.println(words[j]);
                    }System.out.println(((i+1)) + "件、登録しました。");
                }
            }
            i++;
        }
    }
}


