<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas</title>
</head>
<body>
    <?php
        include ("classe.php");

        $p1 = new Pessoa();
        $p1->nome       = "Beatriz Baccaro";
        $p1->altura     ="1.60";
        $p1->nascimento ="02/08/2006";
        $p1->hobbie     ="Esporte";

        echo "Nome: ". $p1->nome. ": <br/>
            Altura: ". $p1->altura. "<br/>
            Nascimento: ". $p1->nascimento. "<br/>
            Hobbie: ". $p1->hobbie. "<br/><br/><hr><br/>";

        $p2 = new Pessoa();
        $p2->nome       ="Laura Perez";
        $p2->altura     ="1.70";
        $p2->nascimento ="03/08/2006";
        $p2->hobbie     ="Ler";

        echo "Nome: ". $p2->nome. ": <br/>
            Altura: ". $p2->altura. "<br/>
            Nascimento: ". $p2->nascimento. "<br/>
            Hobbie: ". $p2->hobbie. "<br/><br/><hr><br/>";
    
        $p3 = new Pessoa();
        $p3->nome       ="Julia Mogi";
        $p3->altura     ="1.70";
        $p3->nascimento ="08/11/2006";
        $p3->hobbie     ="Cozinhar";
    
        echo "Nome: ". $p3->nome. ": <br/>
            Altura: ". $p3->altura. "<br/>
            Nascimento: ". $p3->nascimento. "<br/>
            Hobbie: ". $p3->hobbie. "<br/><br/><hr><br/>";
    
        $p4 = new Pessoa();
        $p4->nome       ="Samuel Américo";
        $p4->altura     ="1.85";
        $p4->nascimento ="26/01/2007";
        $p4->hobbie     ="Tocar piano";
    
        echo "Nome: ". $p4->nome. ": <br/>
            Altura: ". $p4->altura. "<br/>
            Nascimento: ". $p4->nascimento. "<br/>
            Hobbie: ". $p4->hobbie. "<br/><br/><hr><br/>";

        $p5 = new Pessoa();
        $p5->nome       ="Pedro Santos";
        $p5->altura     ="1.80";
        $p5->nascimento ="24/10/2006";
        $p5->hobbie     ="Tocar violão";

        echo "Nome: ". $p5->nome. ": <br/>
            Altura: ". $p5->altura. "<br/>
            Nascimento: ". $p5->nascimento. "<br/>
            Hobbie: ". $p5->hobbie. "<br/><br/><hr><br/>";

        $p6 = new Pessoa();
        $p6->nome       = "Henrique Nagata";
        $p6->altura     ="1.58";
        $p6->nascimento ="25/10/2006";
        $p6->hobbie     ="Andar de bicicleta";

        echo "Nome: ". $p6->nome. ": <br/>
            Altura: ". $p6->altura. "<br/>
            Nascimento: ". $p6->nascimento. "<br/>
            Hobbie: ". $p6->hobbie. "<br/><br/><hr><br/>";

        $p7 = new Pessoa();
        $p7->nome       = "Miguel Romero";
        $p7->altura     ="1.70";
        $p7->nascimento ="14/04/2007";
        $p7->hobbie     ="Jogar futebol";

        echo "Nome: ". $p7->nome. ": <br/>
            Altura: ". $p7->altura. "<br/>
            Nascimento: ". $p7->nascimento. "<br/>
            Hobbie: ". $p7->hobbie. "<br/><br/><hr><br/>";

        $p8 = new Pessoa();
        $p8->nome       = "Pedro Araujo";
        $p8->altura     ="1.68";
        $p8->nascimento ="24/09/2006";
        $p8->hobbie     ="Jogar video game";

        echo "Nome: ". $p8->nome. ": <br/>
            Altura: ". $p8->altura. "<br/>
            Nascimento: ". $p8->nascimento. "<br/>
            Hobbie: ". $p8->hobbie. "<br/><br/><hr><br/>";
        
        $p9 = new Pessoa();
        $p9->nome       = "Natally Reis";
        $p9->altura     ="1.60";
        $p9->nascimento ="07/01/2007";
        $p9->hobbie     ="Ouvir música";

        echo "Nome: ". $p9->nome. ": <br/>
            Altura: ". $p9->altura. "<br/>
            Nascimento: ". $p9->nascimento. "<br/>
            Hobbie: ". $p9->hobbie. "<br/><br/><hr><br/>";
        
        $p10 = new Pessoa();
        $p10->nome       = "Kuan Silva";
        $p10->altura     ="1.68";
        $p10->nascimento ="02/09/2006";
        $p10->hobbie     ="Jogar videogame";

        echo "Nome: ". $p10->nome. ": <br/>
            Altura: ". $p10->altura. "<br/>
            Nascimento: ". $p10->nascimento. "<br/>
            Hobbie: ". $p10->hobbie. "<br/><br/><hr><br/>";
        
        $p11 = new Pessoa();
        $p11->nome       = "Kaua Lira";
        $p11->altura     ="1.63";
        $p11->nascimento ="05/01/2007";
        $p11->hobbie     ="Tocar guitarra";

        echo "Nome: ". $p11->nome. ": <br/>
            Altura: ". $p11->altura. "<br/>
            Nascimento: ". $p11->nascimento. "<br/>
            Hobbie: ". $p11->hobbie. "<br/><br/><hr><br/>";
        
        $p12 = new Pessoa();
        $p12->nome       = "Thell Zardi";
        $p12->altura     ="1.65";
        $p12->nascimento ="31/10/2006";
        $p12->hobbie     ="Jogar";

        echo "Nome: ". $p12->nome. ": <br/>
            Altura: ". $p12->altura. "<br/>
            Nascimento: ". $p12->nascimento. "<br/>
            Hobbie: ". $p12->hobbie. "<br/><br/><hr><br/>";
        
        $p13 = new Pessoa();
        $p13->nome       = "Ana Zinatto";
        $p13->altura     ="1.60";
        $p13->nascimento ="03/11/2006";
        $p13->hobbie     ="Ouvir música";

        echo "Nome: ". $p13->nome. ": <br/>
            Altura: ". $p13->altura. "<br/>
            Nascimento: ". $p13->nascimento. "<br/>
            Hobbie: ". $p13->hobbie. "<br/><br/><hr><br/>";

        $p14 = new Pessoa();
        $p14->nome       = "Beatriz Mayumi";
        $p14->altura     ="1.65";
        $p14->nascimento ="03/03/2007";
        $p14->hobbie     ="Ler livros";

        echo "Nome: ". $p14->nome. ": <br/>
            Altura: ". $p14->altura. "<br/>
            Nascimento: ". $p14->nascimento. "<br/>
            Hobbie: ". $p14->hobbie. "<br/><br/><hr><br/>";

        $p15 = new Pessoa();
        $p15->nome       = "Gabrielli Freire";
        $p15->altura     ="";
        $p15->nascimento ="";
        $p15->hobbie     ="";

        echo "Nome: ". $p15->nome. ": <br/>
            Altura: ". $p15->altura. "<br/>
            Nascimento: ". $p15->nascimento. "<br/>
            Hobbie: ". $p15->hobbie. "<br/><br/><hr><br/>";
        
        $p16 = new Pessoa();
        $p16->nome       = "Leticia Gabrielli";
        $p16->altura     ="1.65";
        $p16->nascimento ="30/09/2006";
        $p16->hobbie     ="Assistir série";

        echo "Nome: ". $p16->nome. ": <br/>
            Altura: ". $p16->altura. "<br/>
            Nascimento: ". $p16->nascimento. "<br/>
            Hobbie: ". $p16->hobbie. "<br/><br/><hr><br/>";

        $p17 = new Pessoa();
        $p17->nome       = "Camilly Vitória";
        $p17->altura     ="1.60";
        $p17->nascimento ="20/01/2007";
        $p17->hobbie     ="Aula de jazz";

        echo "Nome: ". $p17->nome. ": <br/>
            Altura: ". $p17->altura. "<br/>
            Nascimento: ". $p17->nascimento. "<br/>
            Hobbie: ". $p17->hobbie. "<br/><br/><hr><br/>";

        $p18 = new Pessoa();
        $p18->nome       = "Gabriel Credendio";
        $p18->altura     ="1.70";
        $p18->nascimento ="28/07/2006";
        $p18->hobbie     ="Video game";

        echo "Nome: ". $p18->nome. ": <br/>
            Altura: ". $p18->altura. "<br/>
            Nascimento: ". $p18->nascimento. "<br/>
            Hobbie: ". $p18->hobbie. "<br/><br/><hr><br/>";

        $p19 = new Pessoa();
        $p19->nome       = "Gabriel Alves";
        $p19->altura     ="1.84";
        $p19->nascimento ="03/08/2006";
        $p19->hobbie     ="Jogar video game";

        echo "Nome: ". $p19->nome. ": <br/>
            Altura: ". $p19->altura. "<br/>
            Nascimento: ". $p19->nascimento. "<br/>
            Hobbie: ". $p19->hobbie. "<br/><br/><hr><br/>";

        $p20 = new Pessoa();
        $p20->nome       = "Ana Clara Ferreira";
        $p20->altura     ="1.55";
        $p20->nascimento ="21/03/2007";
        $p20->hobbie     ="Pintar";

        echo "Nome: ". $p20->nome. ": <br/>
            Altura: ". $p20->altura. "<br/>
            Nascimento: ". $p20->nascimento. "<br/>
            Hobbie: ". $p20->hobbie. "<br/><br/><hr><br/>";

        $p21 = new Pessoa();
        $p21->nome       = "José Luiz";
        $p21->altura     ="1.71";
        $p21->nascimento ="15/09/2006";
        $p21->hobbie     ="Assistir critica de filme";

        echo "Nome: ". $p21->nome. ": <br/>
            Altura: ". $p21->altura. "<br/>
            Nascimento: ". $p21->nascimento. "<br/>
            Hobbie: ". $p21->hobbie. "<br/><br/><hr><br/>";

        $p22 = new Pessoa();
        $p22->nome       = "Pedro Grechi";
        $p22->altura     ="1.69";
        $p22->nascimento ="23/03/2007";
        $p22->hobbie     ="Desenhar";

        echo "Nome: ". $p22->nome. ": <br/>
            Altura: ". $p22->altura. "<br/>
            Nascimento: ". $p22->nascimento. "<br/>
            Hobbie: ". $p22->hobbie. "<br/><br/><hr><br/>";

        $p23 = new Pessoa();
        $p23->nome       = "Ryan Silveira";
        $p23->altura     ="1.72";
        $p23->nascimento ="02/09/2006";
        $p23->hobbie     ="Jogar video game";

        echo "Nome: ". $p23->nome. ": <br/>
            Altura: ". $p23->altura. "<br/>
            Nascimento: ". $p23->nascimento. "<br/>
            Hobbie: ". $p23->hobbie. "<br/><br/><hr><br/>";
    
        $p24 = new Pessoa();
        $p24->nome       = "Gabriel Diaz";
        $p24->altura     ="1.74";
        $p24->nascimento ="21/03/2007";
        $p24->hobbie     ="Jogar";

        echo "Nome: ". $p24->nome. ": <br/>
            Altura: ". $p24->altura. "<br/>
            Nascimento: ". $p24->nascimento. "<br/>
            Hobbie: ". $p24->hobbie. "<br/><br/><hr><br/>";

        $p25 = new Pessoa();
        $p25->nome       = "Giovana Lupo";
        $p25->altura     ="1.62";
        $p25->nascimento ="14/05/2007";
        $p25->hobbie     ="Pintar";

        echo "Nome: ". $p25->nome. ": <br/>
            Altura: ". $p25->altura. "<br/>
            Nascimento: ". $p25->nascimento. "<br/>
            Hobbie: ". $p25->hobbie. "<br/><br/><hr><br/>";

        $p26 = new Pessoa();
        $p26->nome       = "Felipe Wilbert";
        $p26->altura     ="1.78";
        $p26->nascimento ="06/12/2006";
        $p26->hobbie     ="Academia";

        echo "Nome: ". $p26->nome. ": <br/>
            Altura: ". $p26->altura. "<br/>
            Nascimento: ". $p26->nascimento. "<br/>
            Hobbie: ". $p26->hobbie. "<br/><br/><hr><br/>";
        
        $p27 = new Pessoa();
        $p27->nome       = "Raí Franca";
        $p27->altura     ="1.82";
        $p27->nascimento ="12/09/2006";
        $p27->hobbie     ="Ouvir música";

        echo "Nome: ". $p27->nome. ": <br/>
            Altura: ". $p27->altura. "<br/>
            Nascimento: ". $p27->nascimento. "<br/>
            Hobbie: ". $p27->hobbie. "<br/><br/><hr><br/>";
        
        $p28 = new Pessoa();
        $p28->nome       = "Bruno Alves";
        $p28->altura     ="1.78";
        $p28->nascimento ="28/05/2007";
        $p28->hobbie     ="Tocar instrumento";

        echo "Nome: ". $p28->nome. ": <br/>
            Altura: ". $p28->altura. "<br/>
            Nascimento: ". $p28->nascimento. "<br/>
            Hobbie: ". $p28->hobbie. "<br/><br/><hr><br/>";

        $p29 = new Pessoa();
        $p29->nome       = "Maria Eduarda";
        $p29->altura     ="1.65";
        $p29->nascimento ="02/04/2007";
        $p29->hobbie     ="Jogar vôlei";

        echo "Nome: ". $p29->nome. ": <br/>
            Altura: ". $p29->altura. "<br/>
            Nascimento: ". $p29->nascimento. "<br/>
            Hobbie: ". $p29->hobbie. "<br/><br/><hr><br/>";
        
        $p30 = new Pessoa();
        $p30->nome       = "Luiz Gustavo";
        $p30->altura     ="1.77";
        $p30->nascimento ="06/03/2007";
        $p30->hobbie     ="Dormir";

        echo "Nome: ". $p30->nome. ": <br/>
            Altura: ". $p30->altura. "<br/>
            Nascimento: ". $p30->nascimento. "<br/>
            Hobbie: ". $p30->hobbie. "<br/><br/><hr><br/>";

        $p31 = new Pessoa();
        $p31->nome       = "Guilerme Carvalho";
        $p31->altura     ="1.75";
        $p31->nascimento ="09/06/2007";
        $p31->hobbie     ="Jogar video game";

        echo "Nome: ". $p31->nome. ": <br/>
            Altura: ". $p31->altura. "<br/>
            Nascimento: ". $p31->nascimento. "<br/>
            Hobbie: ". $p31->hobbie. "<br/><br/><hr><br/>";

        $p32 = new Pessoa();
        $p32->nome       = "Ana Clara Maciel";
        $p32->altura     ="1.50";
        $p32->nascimento ="19/01/2007";
        $p32->hobbie     ="Ler";

        echo "Nome: ". $p32->nome. ": <br/>
            Altura: ". $p32->altura. "<br/>
            Nascimento: ". $p32->nascimento. "<br/>
            Hobbie: ". $p32->hobbie. "<br/><br/><hr><br/>";

        $p33 = new Pessoa();
        $p33->nome       = "Henrique Tavares";
        $p33->altura     ="1.63";
        $p33->nascimento ="26/07/2006";
        $p33->hobbie     ="Jogar";

        echo "Nome: ". $p33->nome. ": <br/>
            Altura: ". $p33->altura. "<br/>
            Nascimento: ". $p33->nascimento. "<br/>
            Hobbie: ". $p33->hobbie. "<br/><br/><hr><br/>";
        
        $p34 = new Pessoa();
        $p34->nome       = "Gustavo Otaviano";
        $p34->altura     ="1.85";
        $p34->nascimento ="04/03/2007";
        $p34->hobbie     ="Esportes";

        echo "Nome: ". $p34->nome. ": <br/>
            Altura: ". $p34->altura. "<br/>
            Nascimento: ". $p34->nascimento. "<br/>
            Hobbie: ". $p34->hobbie. "<br/><br/><hr><br/>";

    echo "Abaixo um exemplo pratico de uso de métodos: <br/><br/>";
    $p1->MostrarPessoa();
    
    ?>
</body>
</html>