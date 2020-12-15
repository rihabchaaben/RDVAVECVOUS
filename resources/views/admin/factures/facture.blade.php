@extends('layouts.admin.master')
@section('content')
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/invoices/invoice-v1.default.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-portlet">
            
            <div class="kt-portlet__body kt-portlet__body--fit " >
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <form action="{{route('admin.facture_store',request()->id)}}" method="post">
                        @csrf
                        <div class="kt-invoice-1">
                            <div class="kt-invoice__wrapper">
                                <div class="kt-invoice__head alert alert-info fade show"
                                     style="background-image: url(../../assets/media/bg/bg-6.jpg);">

                                    <div class="kt-invoice__container kt-invoice__container--centered">
                                        <div class="kt-invoice__logo">
                                            <a href="#">
                                                <h1>Facture </h1>
                                            </a>
                                             
                                        </div>
                                       
                                        <div class="kt-invoice__items">
                                            <div class="kt-invoice__item">
                                                <span class="kt-invoice__subtitle">DATE</span>
                                                <span class="kt-invoice__text">{{date('d/m/y')}}</span>
                                            </div>
                                            <div class="kt-invoice__item">
                                                <span class="kt-invoice__subtitle">Facture  NO.</span>
                                                <span class="kt-invoice__text">Facture  {{$pro->id}}</span>
                                            </div>
                                            <div class="kt-invoice__item">
                                                <span class="kt-invoice__subtitle">Facture POUR.</span>
                                                <span class="kt-invoice__text"> 
                                                    
                                                     {{$pro->nom}}
                                                     </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-invoice__body kt-invoice__body--centered">
                                    <div class="table-responsive">
                                        <table class="table" id="myTable">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Mois</th>
                                                <th class="text-center">Nombre des RDV acceptes </th>
                                                 <td class="text-center kt-font-danger" style="font-size: 1.5rem;font-weight: bold;">Total (€) </td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" 
                                                           
                                                            readonly value="{{date('d-m-y')}}" disabled required></td>

                                                <td>
                                                    
                                                <select name="mois" id="" class="form-control" style="margin-left: 12px;">
     
                                                @foreach($months as $key=>$value)
                                                    <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                                </select>
                                                
                                                </td>
                                                <td>
                                               <input type="number" class="form-control  prix_unitaire"
                                                
                                                style="width:50%;border:1px solid #d1d2d4;margin-left:25%;font-weight: 600;"
                                                name="nombre_rdv" required   ></td>
                                                
                                                <td><input type="number" class="form-control  prix_unitaire"
                                                
                                                style="width:50%;border:1px solid #d1d2d4;margin-left:25%;font-weight: 600;"
                                                name="montant_total" required    ></td>




                                              
                                            </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
 
                                    

                                </div>
                                
                               
                                 

                            </div>
 <br> <br>
                            <hr>
                            <br> <br> <br>
                          <center>
                            <button type="reset"
                                    class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                    data-ktwizard-type="action-submit">
                                Réinitialiser
                            </button>
                            <button type="submit"
                                    class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                    data-ktwizard-type="action-next">
                                Envoyer Devis
                            </button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- end:: Content -->

@endsection

