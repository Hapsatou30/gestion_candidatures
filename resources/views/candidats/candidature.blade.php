
@extends('layouts.app')
@section('content')
    <section>
        <h1 style="font-family: 'Nunito', sans-serif; text-align:center;font-weight: bold; ">Mes candidatures à Simplon</h1>
        <div class="trait"></div>
        <div class="carres">
            <div class="carre"></div>
            <div class="carre"></div>
            <div class="carre"></div>
        </div>
    </section>
    <section style="margin-top:60px">
        <div style="background-color:#CE0033; width:70%; margin-left:14%">
            <div style="background-color:#ffffff; width:100%; border-radius:60px;">
                <div class="container mt-5" style="padding:50px;">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Cohortes</th>
                                <th scope="col">Formations</th>
                                <th scope="col">Résultats</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="height: 100px;">
                                <td>P7 Dev Web et Web Mobile</td>
                                <td>Développeur Web + IOT</td>
                                <td>Retenu</td>
                            </tr>
                            <tr style="height: 100px;">
                                <td>P5 Ref Dig</td>
                                <td>Référent Digital</td>
                                <td>Nom retenu</td>
                            </tr>
                            <tr style="height: 100px;">
                                <td>P4 Dev Web Front-end</td>
                                <td>Développeur Web + IOT</td>
                                <td>Nom retenu</td>
                            </tr>
                            <tr style="height: 100px;">
                                <td>P10 SAS Women in Tech</td>
                                <td>SAS Hackeuse</td>
                                <td>Retenu</td>
                            </tr>
                        </tbody>
                    </table>
                </div>     
            </div>
        </div>
    </section>
    @endsection