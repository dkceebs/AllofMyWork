package Kyusho;

import java.util.Scanner;

public class CompatibilityDiagnosisGame {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);


        //名前の表示
        System.out.println("こんにちは、相性占いゲームをやってみませんか？");
        System.out.println("早速ですが、あなたのお名前を入力してください");
        String yourname = new java.util.Scanner(System.in).nextLine();
        String message;
        message = yourname + "さん、よろしくお願いします";
        System.out.println(message);
        System.out.println("私と貴方の相性診断を始めます。いくつかの質問に答えてくださいね。");

        //質問１
        System.out.println("質問１：私はカレーが好きだ");
        //選択肢を配列とforで作成
        String[] anser1 = {"１：とても当てはまる","　２：当てはまる","　３：あまり当てはまらない","　４：当てはまらない"};
        for (int i = 0; i < anser1.length; i++){
            System.out.print(anser1[i]);
        }
        //解答番号入力部分
        int answer1 = new java.util.Scanner(System.in).nextInt();


        //質問２
        System.out.println("質問２：休日によくプログラミングする");
        //選択肢を配列とforで作成
        String[] anser2 = {"１：とても当てはまる","　２：当てはまる","　３：あまり当てはまらない","　４：当てはまらない"};
        for (int i = 0; i < anser2.length; i++){
            System.out.print(anser2[i]);
        }
        //入力部分
        int answer2 = new java.util.Scanner(System.in).nextInt();


        //質問３
        System.out.println("質問３：よく笑う");
        //選択肢を配列とforで作成
        String[] anser3 = {"１：とても当てはまる","　２：当てはまる","　３：あまり当てはまらない","　４：当てはまらない"};
        for (int i = 0; i < anser3.length; i++){
            System.out.print(anser3[i]);
        }
        //入力部分
        int answer3 = new java.util.Scanner(System.in).nextInt();


        //質問４
        System.out.println("質問４：よくあくびをする");
        //選択肢を配列とforで作成
        String[] anser4 = {"１：とても当てはまる","　２：当てはまる","　３：あまり当てはまらない","　４：当てはまらない"};
        for (int i = 0; i < anser4.length; i++){
            System.out.print(anser4[i]);
        }
        //入力部分
        int answer4 = new java.util.Scanner(System.in).nextInt();


        //質問５
        System.out.println("質問５：運動が好きだ");
        //選択肢を配列とforで作成
        String[] anser5 = {"１：とても当てはまる","　２：当てはまる","　３：あまり当てはまらない","　４：当てはまらない"};
        for (int i = 0; i < anser5.length; i++){
            System.out.print(anser5[i]);
        }
        //入力部分
        int answer5 = new java.util.Scanner(System.in).nextInt();


        //質問終了
        //入力されたポイントの合計を計算
        int sum = answer1 + answer2 + answer3 + answer4 + answer5;


        //相性診断結果表示
        System.out.println("診断結果");
        System.out.println("あなたが選択したポイントの合計は" + sum + "です。");


        //if文で相性結果を分岐表示
        if (sum == 5){
            System.out.println("あなたと私の相性は最高です。");
        }else if (sum >= 6 && sum <= 10){
            System.out.println("あなたと私の相性はなかなかです。");
        }else if (sum >= 11 && sum <= 15){
            System.out.println("あなたと私の相性は微妙です。");
        }else if (sum >= 16 && sum <= 20){
            System.out.println("あなたと私の相性はいまひとつです。");
        }
    }
}