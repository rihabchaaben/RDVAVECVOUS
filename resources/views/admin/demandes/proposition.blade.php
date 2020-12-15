@extends('layouts.admin.master')
@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">


        </div>
        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-subheader-search ">
            
        </div>
        <br><br>
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                       
                    </div>
                    
                </div>
                <div class="kt-portlet__body">

                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Etat</th>
                                     
                                    <th>Nom</th>
                                    <th>Mail </th>
                                    <th>Telephone</th>
                                     <th>Adresse </th>  
                                    <th>Ville</th>
                                    <th>Devis</th>
                                  

                                 </tr>
                                </thead>
                                <tbody>
                                @foreach($propositions as $proposition)
                                    <tr>

                                        

                                         @if($proposition->status===0)
                                        <th scope="row">NV</th>

                                        @elseif($proposition->status===1)
                                        <th scope="row">R</th>
                                        @elseif($proposition->status===2)
                                        <th scope="row">ACC</th>
                                        @elseif($proposition->status===3)
                                        <th scope="row">EN A</th>
                                        @elseif($proposition->status===4)
                                        <th scope="row">ANN</th>
                                        @elseif($proposition->status===5)
                                        <th scope="row">DV</th>
                                        @elseif($proposition->status===6)
                                        <th scope="row">FC</th>

                                        @endif
                                       
                                        <td>{{$proposition->professionnel->nom}}</td>

                                         <td>{{$proposition->professionnel->user->email}}</td>

                                        <td>{{$proposition->professionnel->telephone}}</td>
                                        <td>{{$proposition->professionnel->adresse}}</td>
                                        <td>{{$proposition->professionnel->ville->name}},{{$proposition->professionnel->cp}}</td>
                                         <td>
                                         @if($proposition->status===5)
                                         Oui
                                         @else 
                                         Non
                                         @endif 
                                         
                                         </td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection