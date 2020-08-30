<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Devis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    @page {
                margin: 0px;
            }
            body {
                margin: 0px;
            }
            * {
                font-family: Verdana, Arial, sans-serif;
            }
            a {
                color: #fff;
                text-decoration: none;
            }
            h1 {
              font-size:40px;
              font-weight: bold;
              line-height: 35px;
            }
            h2 {
              font-size: 27px;
              font-weight:500;
              line-height: 32px;
              color: #3A3A3C;
            }
            .end{
              page-break-after: always;
            }
            .before{
              page-break-before: always;
            }

            .sousTitre {
              font-size:19px;
              color: #AFAEAF;
              line-height: 27px;
              padding-top: 20px;
            }

            .encart1-3 {
              background-color: #151515;
              color: #FFF;
              width: 100%;
              height: 33.33%;
            }
            /* STYLE PDF1 */

            .pdf1-1 {
              background-color: #151515;
              color: #FFF;
              width: 100%;
              height: 50%;
            }
            .pdf1-1 .logo {
                padding-top: 203px;
                padding-left: 300px;
            }

            .pdf1-2 p {
              font-size: 72px;
              padding-top:150px;
              padding-left: 150px;
              padding-bottom: 32px;
            }
            .pdf1-2 .logo {
              padding-top: 203px;
              padding-left: 336px;

            }
            .contenu {
              padding-left: 110px;
              padding-right : 110px;
              padding-top: 70px;
            }
            .hrtd {
              border: 2px solid #F2F1F0;
            }

            #pdf2-1>h1 {
              padding-top: 70px;
            }

            #pdf2-1>p {
              padding-top: 30px;
            }

            .pdf2-2 {
              padding-left: 110px;
              padding-top: 70px;
              padding-right: 110px;
            }

            #pdf2-2-1>div:nth-child(2) {
              padding-top: 40px;
            }
            #pdf2-2-1 p:nth-child(2){
              color: #969696;
              font-size: 15px;
              line-height: 21px;
            }

            #pdf2-2-2>table>td>p {
              color: #969696;
              font-size: 15px;
              line-height: 16px;
            }
            #pdf2-2-2 {
              padding-top: 40px;
            }
            #pdf2-2-2>table>td>h2 {
              padding-bottom: 25px;
            }

            #pdf2-2-3 {
              padding-top: 200px;
            }

            #pdf2-2-3>td>h2 {
              color: #969696;
            }

            /* STYLE PDF3 */

            #pdf3-2-1 {
              padding-top: 40px;
              padding-bottom: 60px;
            }

            #pdf3-2-1>td>p{
              color: #969696;
              line-height: 21px;
              font-size: 15px;
            }

            #pdf3-2-2 {
              padding-top: 90px;
            }

            #pdf3-2-2>p {
              font-size: 15px;
              line-height: 21px;
            }

            #pdf3-3-1 div {
              padding: 10px;
            }

            /* STYLE PDF4 */

            #pdf4-2 {
              padding-top: 20px;
            }

            #pdf4-1-2>table>td:first-child {
              color: #3A3A3C;
            }
            #pdf4-1-2 table td p {
              font-size: 15px;
              line-height: 21px;
            }

            #pdf4-1-2>table>td:nth-child(3){
              color: #AFAEAF;
              padding-left: 60px;
            }

            #pdf4-2-1>p:first-child,#pdf4-2-2>p:first-child{
              color:#3A3A3C;
              font-size: 15px;
              line-height: 14px;
            }

            #pdf4-2-1>p:nth-child(4),#pdf4-2-2>p:nth-child(4){
              color:#AFAEAF;
              font-size: 12px;
            }

            #pdf4-2-1>p:nth-child(5),#pdf4-2-2>p:nth-child(5){
              color:#3A3A3C;
              font-size: 12px;
              line-height: 19px;
            }

            /* STYLE PDF5 */

           #pdf5-2-1 p {
             color: #AFAEAF;
           }

           /* STYLE PDF6 */

          .titrePosition {
            padding-top: 110px;
            padding-left: 110px;
            padding-right: 110px;
          }

          .pdf6-2-1-g {
            color: #969696;
          }

          .pdf6-2-f table tr td div p {
            font-size: 15px;
            line-height: 21px;
          }

          #pdf6-2-1 {
            padding-right: 120px;
          }
          #pdf6-2-2 {
            padding-right: 105px;
          }
          #pdf6-2-3 {
            padding-right: 74px;
          }
          #pdf6-2-4 {
            padding-right: 45px;
          }
          #pdf6-2-5 {
            padding-right: 40px;
            display: inline;
          }
          #pdf6-2-6 {
            padding-right: 100px;
            display: inline;
          }


          /* STYLE PDF7 */
          #pdf7 {
            padding-left: 110px;
            padding-top: 110px;
          }

          #pdf7-1 {
            padding-right: 300px;
          }

          #pdf7-2 {
            padding-left: 110px;
            padding-top: 70px;
            padding-right: 110px;
          }

          #pdf7-3 {
            padding-left: 110px;
            padding-top: 30px;
            padding-right: 110px;
          }

          #pdf7-3>table>td>p {
            color:#3A3A3C;
            font-size: 17px;
            line-height: 25px;
          }
          #pdf7-4 {
            padding-left: 110px;
            padding-right: 110px;
            padding-top: 30px;
          }



          /* STYLE PDF8 */
          .pdf8{
            padding-left: 110px;
            padding-right: 110px;
            padding-top: 20px;
          }
          #pdf8-1-1 {
              padding-right: 300px;
          }

          #pdf8-1-1>p:first-child{
            font-size: 17px;
            line-height: 21px;
            color: #3A3A3C;
          }

         #pdf8-2 td p{
           color: #969696;
         }

         /* STYLE PDF9 */

        #pdf9-2-1>p{
          color: #969696;
        }


        #pdf9-1-2>div:nth-child(3) {
          padding-top: 10px;
        }

        #pdf9-3 {
          max-width: 82%;
        }
        #pdf9-3>table>td>p{
          padding-top: 50px;
          padding-left: 90px;
        }

        /* STYLE PDF10 */

       .pdf10-2-1-g {
         color: #969696;
       }

       .pdf10-2-f table tr td div p {
         font-size: 15px;
         line-height: 21px;
       }

       #pdf10-2-1 {
         padding-right: 120px;
       }
       #pdf10-2-2 {
         padding-right: 105px;
       }
       #pdf10-2-3 {
         padding-right: 74px;
       }
       #pdf10-2-4 {
         padding-right: 45px;
       }


       /* STYLE PDF11 */

       #pdf11-1-1 {
         padding-left: 90px;
       }
       #pdf11-1-1>h2 {
         color: #151515;
         /* font-size: 30px; */
       }

       #pdf11-2>table>td>p {
         font-size: 13px;
         line-height: 19px;
         color: #151515;
       }
       #pdf11-2>td:nth-child(2) {
         font-size: 10px;
         line-height: 16px;
         color: #151515;
       }

       /* STYLE PDF12 */
    </style>
  </head>
  <body>

<!-- Définition variable  -->
@php
$category = $categories[$estimate->categorie_id];
$ismarketing = $category == 'marketing';
$isdev = $category == 'dev';
$isfull = $category =='full';
@endphp

<!-- PDF 1 -->
<div class="pdf1-1">
  <table>
      <tr>
          <td align="center">
            <div class="logo">
              <h1>Devis {{$estimate->id}}</h1>
            </div>
          </td>
      </tr>
  </table>
</div>
<div class="pdf1-2 end">
  <table>
    <tr>
      <td align="center">
        <div class="logo">
          <img width="100" src="{{ $client['logo'] }}" alt="">
        </div>
      </td>
    </tr>
  </table>
</div>

<!-- PDF 2 -->
<div class="encart1-3">
  <table>
      <td align="left">
            <div class="titrePosition">
              <h1>Title 2</h1>
              <p class="sousTitre">Sub Title</p>
            </div>
      </td>
  </table>
</div>
<div class="pdf2-2 end">
  <h2>Résumé de la situation</h2>
    <table class="pt-4 pb-5 text-center" id="pdf2-2-1">
      <td>
        <p class="font-italic">«{{$estimate->summerize}}»</p>
      </td>
    </table>
    <div id="pdf2-2-2">
      <table>
        <td><h2>Proposition.</h2>
        <p>{{$estimate->proposition}}</p></td>
      </table>
    </div>
    <table id="pdf2-2-3">
      <td>
        <h2>Merci de votre confiance.</h2>
      </td>
    </table>
</div>

<!-- PDF 3 -->
<div class="encart1-3">
  <table class="titrePosition">
    <td align="left">
      <h1>Title 3.</h1>
    </td>
  </table>
</div>
<div class="contenu">
  <table id="pdf3-2-1">
      <td align="left">
        <p>
          <span class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, neque dicta nihil facere adipisci,
          consequuntur sit velit nostrum ipsa, ratione amet maxime. Cumque, eligendi totam assumenda repellat mollitia ullam alias.</span>
          <span class="font-weight-bold">outils en ligne à fort potentiel</span> en plaçant
          lorem lorem</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia eius
          reiciendis molestias vitae consequatur vel illum blanditiis illo, dolor,
          voluptatum quaerat suscipit nobis, nihil et labore. Et asperiores distinctio dicta.
            <span class="font-weight-bold">compatibles mobile.</span>
        </p>
      </td>
  </table>
    <div class="text-center" id="pdf-3-2-2">
      <p class="font-italic">« Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, rerum hic praesentium delectus perferendis. Nulla quasi numquam ratione eaque nobis. Architecto, beatae impedit
        delectus consectetur soluta laudantium voluptatum explicabo eligendi!
      </p>
    </div>
  </div>
  <div class="contenu end">
    <h2>Partners</h2>
      <table id="pdf3-3-1">
        <td>
          <div>
            <img src="{{ public_path() }}/img/business-1.png" style="width:20%;height:20%;" alt="">
          </div>
        </td>
        <td>
          <div>
            <img src="{{ public_path() }}/img/business-2.png" style="width:20%;height:20%;" alt="">
          </div>
        </td>
        <td>
          <div>
            <img src="{{ public_path() }}/img/business-3.png" style="width:20%;height:20%;" alt="">
          </div>
        </td>
        <td>
          <div>
            <img src="{{ public_path() }}/img/business-4.png" style="width:20%;height:20%;" alt="">
          </div>
        </td>
      </table>
  </div>

<!-- PDF4 -->
<div class="encart1-3">
  <table class="titrePosition">
    <td>
      <h1>Title 4.</h1>
    </td>
  </table>
</div>
<div class="contenu" id="pdf4-1-2">
  <table>
    <td>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus illum
      sit quae doloremque ipsam ut deserunt iusto necessitatibus animi hic, eius eos
      eligendi doloribus voluptas explicabo cum? Quam, tempore, impedit?</p>
    </td>
  </table>
</div>
<div class="contenu end" >
  <h2>Team</h2>
    <table align="center">
        <td class="p-5">
          <div id="pdf4-2-1">
            <div class="pb-3">
              <img src="{{ public_path() }}/img/avatar-1.png" style="width:20%;" alt="">
            </div>
            <p>Johnette Doe</p>
            <p>Managing director</p>
            <p>johnette@doe.com<br />
              0123/455679</p>
          </div>
        </td>
        <td class="p-5" id="pdf4-2-2">
          <div class="pb-3">
            <img src="{{ public_path() }}/img/avatar-2.png" style="width:20%;" alt="">
          </div>
          <p>John Doe</p>
          <p>Managing director</p>
          <p>john@doe.com<br />
            0123/455679</p>
        </td>
    </table>
</div>

<!-- PDF5 Developpement-->
@if ($isdev)
  <div class="encart1-3">
    <table class="titrePosition">
      <td>
        <h1>Title 5 development</h1>
          <p class="sousTitre">Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Veniam iusto, illo dolorum non eaque sapiente accusamus mollitia </p>
      </td>
    </table>
  </div>
  <div class="contenu">
    <table>
      <td>
        <div id="pdf5-2-1">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aliquam
            ipsum,<span class="font-weight-bold">loremihdgdhdizuzhdzdzjdzdziolzdl,
            dzudtduzdjzddz</span> duczgzhccz
          </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati
            libero <span class="font-weight-bold">Uzyzdfghjdzkddytdrzdz
            ldziutzgdz jcycuzizc  zcuzchjczkzc cizycgzc</span></p>
          <p><span class="font-weight-bold">laoaydayudaj auydagadh daudayghajddabdbaud</span> Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Explicabo, cum null
            <span class="font-weight-bold"> cuzhczcjz lozcyczgzcgcznjai</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At molestiae itaque, officia iusto asperiores, nemo.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exerc <span class="font-weight-bold">Lorem ipsum dolor sit amet.
            Lorem ipsum dolor.</span>Lorem ipsum dolor sit amet, consectetur. </p>
        </div>
      </td>
    </table>
  </div>
  <div class="contenu end" id="pdf5-2-2">
    <table class="text-center">
      <td><p class="font-italic">« Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure minus blanditiis quasi
        et illo quia eveniet eaque aspernatur nihil eum! In distinctio nulla, porro deleniti iure quod tempora aliquid ut? »</p></td>
    </table>
  </div>

<!-- PDF6 Developpement-->
<div class="encart1-3">
  <table class="titrePosition">
    <td>
      <h1>Title 6 development.</h1>
        <p class="sousTitre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, voluptatem!</p>
    </td>
  </table>
</div>
<div class="contenu pdf6-2-f end">
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf6-2-1">
          <p>1. Lorem</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est magni aut dignissimos.</p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf6-2-2">
            <p>2. Lorem.</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas et doloribus explicabo
            maiores nesciunt modi!</p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf6-2-3">
          <p>3. Lorem.</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae qui, explicabo ullam, officiis perspiciatis eaque?
          </p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
          <div class="font-weight-bold" id="pdf6-2-4">
            <p>4.Lorem.</p>
          </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem sed, consequatur odit, mollitia iusto
            totam.</p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf6-2-5">
          <p>5. Lorem ipsum dolor.</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, magni.</p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
          <div class="font-weight-bold" id="pdf6-2-6">
            <p>6. Lorem ipsum dolor sit.</p>
          </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod repudiandae et amet unde
            numquam nemo, ullam consequuntur reprehenderit ratione.</p>
        </div>
      </td>
    </tr>
  </table>
</div>
@endif

<!-- PDF 7 Marketing-->
@if ($ismarketing)
<div class="encart1-3">
  <table class="titrePosition">
    <td>
      <h1>Title 7 marketing.</h1>
        <p class="sousTitre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, maxime et!</p>
    </td>
  </table>
</div>
<div class="pdf8">
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf8-1-1">
          <p>Lorem</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p class="font-weight-bold">
            30€/mois HTVA
          </p>
      </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table id="pdf8-1">
    <td>
      <ul>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
      </ul>
    </td>
  </table>
</div>
<div class="pdf8">
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf8-1-1">
          <p>Lorem ipsum</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="left">
          <p class="font-weight-bold">
            9€/mois HTVA
          </p>
      </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table class="end" id="pdf8-2">
    <td>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quasi
        accusamus quod?<span class="font-weight-bold">Lorem ipsum dolor sit amet,
          consectetur adipisicing elit.</span>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quasi
        accusamus quod Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Voluptas, perferendis!<span class="font-weight-bold">Lorem ipsum dolor sit amet,
        consectetur adipisicing elit.</span>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quasi
        accusamus quod?<span class="font-weight-bold">Lorem ipsum dolor sit amet,
          consectetur adipisicing elit.</span>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quasi
        accusamus quod?<span class="font-weight-bold">Lorem ipsum dolor sit amet,
          consectetur adipisicing elit.</span>
      </p>
    </td>
  </table>
</div>

<!-- PDF 8 marketing-->
<div class="encart1-3">
  <table class="titrePosition">
    <td align="left">
      <div>
        <h1>Title 8 marketing.</h1>
          <p class="sousTitre">Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Eveniet laborum doloribus in quo vitae, neque!</p>
      </div>
    </td>
  </table>
</div>
<div class="contenu">
  <table>
      <td>
        <div id="pdf9-2-1">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptatum, tenetur aliquam iure nisi aliquid dolorem laborum
            consequuntur. Et eum maxime quas ipsam inventore ad? Ipsam
            ducimus rem ut ea Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Reprehenderit dolorum voluptatibus, veritatis eos facilis
            beatae minus, nostrum ab dolorem tempore perspiciatis, minima eveniet,
             odio at blanditiis odit aliquam incidunt quaerat!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Dolore dolorum quibusdam modi nemo, animi molestiae ratione
            itaque quidem voluptates, quod perspiciatis molestias aperiam
            suscipit iusto! Cumque, nobis odio! Quasi, Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Vel, non! Placeat esse, eaque illum error
            facilis minima in, ipsam quisquam maxime, quam debitis dolorum odio?
            Aspernatur, debitis beatae labore asperiores.</p>
        </div>
      </td>
  </table>
</div>
<div class="contenu end">
  <table>
    <td align="center">
      <p class="font-italic">« Lorem ipsum dolor sit amet, consectetur adipisicing
        elit. Officiis delectus assumenda, repellendus tenetur quia dolor voluptate
        et exercitationem, modi, praesentium dignissimos aut placeat maxime dolorem
        temporibus. Officia fugit perspiciatis adipisci! »</p>
    </td>
  </table>
</div>

<!-- PDF 9 marketing-->
<div class="encart1-3">
  <table>
    <td align="left">
      <div class="titrePosition">
        <h1>Title 9 marketing.</h1>
          <p class="sousTitre">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Dolor pariatur mollitia aliquam tempore recusandae quibusdam incidunt vel
             tempora molestias, illum adipisci est. Quam eligendi fuga consectetur odit
             molestiae officia doloribus?</p>
      </div>
    </td>
  </table>
</div>
<div class="contenu pdf10-2-f end">
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf10-2-1">
          <p>1. Lorem ipsum dolor sit.</p>
        </div>
      </td>
      <td class="align-top pdf10-2-1-g">
        <div align="right">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Culpa molestiae, minima voluptatem.
          </p>
      </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
          <div class="font-weight-bold" id="pdf10-2-2">
            <p>2. Lorem ipsum dolor sit.</p>
        </div>
      </td>
      <td class="align-top pdf10-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Culpa molestiae, minima voluptatem.</p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf10-2-3">
          <p>3. Lorem.</p>
        </div>
      </td>
      <td class="align-top pdf10-2-1-g">
        <div align="right">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Culpa molestiae, minima voluptatem.
          </p>
      </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf10-2-4">
            <p>4. Lorem ipsum.</p>
        </div>
      </td>
      <td class="align-top pdf10-2-1-g">
        <div align="right">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Culpa molestiae, minima voluptatem.
          </p>
        </div>
      </td>
    </tr>
  </table>
</div>
@endif

<!-- PDF Full-->
<!-- PDF5 Developpement-->
@if ($isfull)
<div class="encart1-3">
  <table class="titrePosition">
        <td>
            <h1>Title 5 development</h1>
            <p class="sousTitre">Lorem ipsum dolor sit amet, consectetur adipisicing
              elit. Veniam iusto, illo dolorum non eaque sapiente accusamus mollitia </p>
        </td>
  </table>
</div>
<div class="contenu">
  <table>
    <td>
      <div id="pdf5-2-1">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aliquam
          ipsum,<span class="font-weight-bold">loremihdgdhdizuzhdzdzjdzdziolzdl,
          dzudtduzdjzddz</span> duczgzhccz</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati
          libero <span class="font-weight-bold">Uzyzdfghjdzkddytdrzdz
          ldziutzgdz jcycuzizc  zcuzchjczkzc cizycgzc</span></p>
        <p><span class="font-weight-bold">laoaydayudaj auydagadh daudayghajddabdbaud</span> Lorem ipsum dolor sit amet,
          consectetur adipisicing elit. Explicabo, cum null
          <span class="font-weight-bold"> cuzhczcjz lozcyczgzcgcznjai</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At molestiae itaque, officia iusto asperiores, nemo.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exerc <span class="font-weight-bold">Lorem ipsum dolor sit amet.
          Lorem ipsum dolor.</span>Lorem ipsum dolor sit amet, consectetur. </p>
      </div>
    </td>
  </table>
</div>
<div class="contenu end" id="pdf5-2-2">
  <table class="text-center">
    <td><p class="font-italic">« Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure minus blanditiis quasi
      et illo quia eveniet eaque aspernatur nihil eum! In distinctio nulla, porro deleniti iure quod tempora aliquid ut? »</p></td>
  </table>
</div>

<!-- PDF6 Developpement-->
<div class="encart1-3">
  <table class="titrePosition">
    <td>
      <h1>Title 6 development.</h1>
        <p class="sousTitre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, voluptatem!</p>
    </td>
  </table>
</div>
<div class="contenu pdf6-2-f end">
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf6-2-1">
          <p>1. Lorem</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est magni aut dignissimos.</p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf6-2-2">
          <p>2. Lorem.</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas et doloribus explicabo maiores
            nesciunt modi!</p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf6-2-3">
          <p>3. Lorem.</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae qui, explicabo ullam, officiis
            perspiciatis eaque?</p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf6-2-4">
          <p>4.Lorem.</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem sed, consequatur odit, mollitia
            iusto totam.</p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf6-2-5">
          <p>5. Lorem ipsum dolor.</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, magni.</p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf6-2-6">
          <p>6. Lorem ipsum dolor sit.</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod repudiandae et amet unde
            numquam nemo, ullam consequuntur reprehenderit ratione.</p>
        </div>
      </td>
    </tr>
  </table>
</div>

<!-- PDF 7 Marketing-->
<div class="encart1-3">
  <table class="titrePosition">
    <td>
      <h1>Title 7 marketing.</h1>
        <p class="sousTitre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, maxime et!</p>
    </td>
  </table>
</div>
<div class="pdf8">
  <table>
    <tr>
      <td class="align-top">
          <div class="font-weight-bold" id="pdf8-1-1">
          <p>Lorem</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="right">
          <p class="font-weight-bold">
            30€/mois HTVA
          </p>
      </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table id="pdf8-1">
    <td>
      <ul>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
      </ul>
    </td>
  </table>
</div>
<div class="pdf8">
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf8-1-1">
          <p>Lorem ipsum</p>
        </div>
      </td>
      <td class="align-top pdf6-2-1-g">
        <div align="left">
          <p class="font-weight-bold">
            9€/mois HTVA
          </p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table class="end" id="pdf8-2">
    <td>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quasi
        accusamus quod?<span class="font-weight-bold">Lorem ipsum dolor sit amet,
          consectetur adipisicing elit.</span>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quasi
        accusamus quod Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Voluptas, perferendis!<span class="font-weight-bold">Lorem ipsum dolor sit amet,
        consectetur adipisicing elit.</span>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quasi
        accusamus quod?<span class="font-weight-bold">Lorem ipsum dolor sit amet,
          consectetur adipisicing elit.</span>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quasi
        accusamus quod?<span class="font-weight-bold">Lorem ipsum dolor sit amet,
          consectetur adipisicing elit.</span>
      </p>
    </td>
  </table>
</div>

<!-- PDF 8 marketing-->
<div class="encart1-3">
  <table class="titrePosition">
    <td align="left">
      <div>
        <h1>Title 8 marketing.</h1>
          <p class="sousTitre">Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Eveniet laborum doloribus in quo vitae, neque!</p>
      </div>
    </td>
  </table>
</div>
<div class="contenu">
  <table>
    <td>
      <div id="pdf9-2-1">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Voluptatum, tenetur aliquam iure nisi aliquid dolorem laborum
          consequuntur. Et eum maxime quas ipsam inventore ad? Ipsam
          ducimus rem ut ea Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Reprehenderit dolorum voluptatibus, veritatis eos facilis
          beatae minus, nostrum ab dolorem tempore perspiciatis, minima eveniet,
           odio at blanditiis odit aliquam incidunt quaerat!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Dolore dolorum quibusdam modi nemo, animi molestiae ratione
          itaque quidem voluptates, quod perspiciatis molestias aperiam
          suscipit iusto! Cumque, nobis odio! Quasi, Lorem ipsum dolor sit amet,
          consectetur adipisicing elit. Vel, non! Placeat esse, eaque illum error
          facilis minima in, ipsam quisquam maxime, quam debitis dolorum odio?
          Aspernatur, debitis beatae labore asperiores.</p>
      </div>
    </td>
  </table>
</div>
<div class="contenu end">
    <table>
        <td align="center">
            <p class="font-italic">« Lorem ipsum dolor sit amet, consectetur adipisicing
              elit. Officiis delectus assumenda, repellendus tenetur quia dolor voluptate
              et exercitationem, modi, praesentium dignissimos aut placeat maxime dolorem
              temporibus. Officia fugit perspiciatis adipisci! »</p>
        </td>
    </table>
</div>

<!-- PDF 9 marketing-->
<div class="encart1-3">
  <table>
    <td align="left">
      <div class="titrePosition">
        <h1>Title 9 marketing.</h1>
          <p class="sousTitre">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Dolor pariatur mollitia aliquam tempore recusandae quibusdam incidunt vel
             tempora molestias, illum adipisci est. Quam eligendi fuga consectetur odit
             molestiae officia doloribus?</p>
      </div>
    </td>
  </table>
</div>
<div class="contenu pdf10-2-f end">
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf10-2-1">
            <p>1. Lorem ipsum dolor sit.</p>
        </div>
      </td>
      <td class="align-top pdf10-2-1-g">
        <div align="right">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Culpa molestiae, minima voluptatem.
          </p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf10-2-2">
          <p>2. Lorem ipsum dolor sit.</p>
        </div>
      </td>
      <td class="align-top pdf10-2-1-g">
        <div align="right">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Culpa molestiae, minima voluptatem.
          </p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf10-2-3">
          <p>3. Lorem.</p>
        </div>
      </td>
      <td class="align-top pdf10-2-1-g">
        <div align="right">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Culpa molestiae, minima voluptatem.
          </p>
        </div>
      </td>
      <hr class="hrtd">
    </tr>
  </table>
  <table>
    <tr>
      <td class="align-top">
        <div class="font-weight-bold" id="pdf10-2-4">
          <p>4. Lorem ipsum.</p>
        </div>
      </td>
      <td class="align-top pdf10-2-1-g">
        <div align="right">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Culpa molestiae, minima voluptatem.
          </p>
      </div>
      </td>
    </tr>
  </table>
</div>
@endif

<!-- PDF 10 Modules-->
<div>
  <table id="pdf7">
    <td><h1>Vos modules.</h1></td>
  </table>
</div>
<div class="contenu end">
  @if($composition)
    @foreach($composition as $compo)
      @if ($compo->title)
       <table>
         <tr>
           <td class="align-top" id="pdf7-1">
             <div class="font-weight-bold" >
               <p>{!! nl2br(e($compo->title)) !!}</p>
             </div>
           </td>
           <td class="align-top pdf10-2-1-g">
             <div>
               <p>{!! nl2br(e($compo->price)) !!} €</p>
             </div>
           </td>
             <div class="pb-4">
               <p>
                 {!! nl2br(e($compo->description)) !!}
               </p>
             </div>
         </tr>
       </table>
   @endif
  @endforeach
 @endif
</div>

<!-- PDF 12 -->
<div class="encart1-3">
  <table>
    <td>
      <div class="titrePosition">
        <h1>Title 11.</h1>
      </div>
    </td>
  </table>
</div>
<div id="pdf12" class="contenu">
  <table>
    <td>
      <h5>Allons-y</h5>
        <p class="font-weight-bold">{{ $client['company'] }}</p>
        <p>Pour accord,</p>
        <p>Fait à : </p>
        <p>Date et signature : </p>
    </td>
  </table>
</div>
  <div class="contenu end">
    <table>
      <td>
        <p>50% before</p>
        <p>50% at the end</p>
      </td>
    </table>
  </div>
</body>
</html>
