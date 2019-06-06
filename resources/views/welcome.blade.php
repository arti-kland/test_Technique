<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mes coupons Copine de voyage</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="../../public/css/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .sous-title{
                font-size: 42px;
            }

            .container{
                width: 800px;
                margin: auto;
            }

            .create{
                margin-bottom: 50px;

            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .showCoupon{
                width: 200px;
                background-colo: grey;
            }
        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    Coupon de réduction
                </div>
                <div class="sous-title">
                    Création de coupons
                </div>
                <div class="container">
                    <div class="form create">
                        <form method="post" action="CouponCreate">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Séléctionez un type de coupon</label>
                                <select class="form-control">
                                    <option name="euros">Coupon de remise en euros</option>
                                    <option name="pourcentage">Coupon de remise en pourcentage</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Valeur de la réduction ?</label>
                                <input type="text" class="form-control" name="value">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput2">Date limite de validité des coupons ?</label>
                                <input type="text" class="form-control" placeholder="Année/mois/jour" name="limitDate">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput3">Nombre de coupon à générer ?</label>
                                <input type="text" class="form-control" name="numberOfCoupon">
                            </div>
                            <div class="button">
                            <button type="submit" class="btn btn-light">Valider</button>
                            </div>
                        </form>
                    </div>
                <div class="form tester">
                    <form method="post" action="CouponTest">
                        {{ csrf_field() }}
                        <div class="sous-title">
                            Tester coupon
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Montant de votre facture</label>
                            <input type="text" class="form-control" placeholder="1000" readonly value="1000">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Entrez numéro de votre coupon</label>
                            <input type="text" class="form-control" name="userIdCoupon">
                        </div>
                        <div class="button">
                            <button type="submit" class="btn btn-light">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
{{--                <div class="showCoupon">--}}
{{--                    @foreach($coupons as $coupon)--}}
{{--                        <td>Type de coupon : {{$coupon->typeCoupon}}</td>--}}<br>
{{--                        <td>Numéro du coupon : {{$coupon->idCoupon}}</td>--}}<br>
{{--                        <td>Valeur du coupon : {{$coupon->discountValue}}</td>--}}<br>
{{--                        <td>Coupon pas encore ulisiser : {{$coupon->unUsedCoupon}}</td>--}}<br>
{{--                        <td>Date de validité : {{$coupon->validDate}}</td>--}}<br>
{{--                        <td>Coupon non révoqué : {{$coupon->validCoupon}}</td>--}}<br>
{{--                    @endforeach--}}
{{--                </div>--}}
            </div>
        </div>
    </body>
</html>
