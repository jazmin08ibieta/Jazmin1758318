import java.util.Scanner;

public class Main {
    public static void main(String[] args){
        String binario;
        double valor = 0;
        int a = 0;
        boolean x = true;
        Scanner entrada = new Scanner (System.in);

        System.out.println("Ingrese un numero binario: ");
        binario = entrada.next();

        for (int i = 0; i <binario.length()-1; i++){
            if (binario.charAt(i)!='1' && binario.charAt(i)!=0){
                x= false;
            }
        }
        if(x==true){
            for (int i=binario.length()-1;i>=0; i--){
                if (binario.charAt(i)=='1'){
                    valor = valor+Math.pow(2, a);
                } else{
                    valor=valor+0;}
                a++;
            }
            System.out.println("El valor decimal es: "+valor);
        } else{
            System.out.println("El numero ingresado no es un valor binario");
        }
    }
}