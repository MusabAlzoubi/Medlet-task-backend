@extends('layouts.app')
@section('contant')      
                
                
                
                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">



                        <div class="row">
                      
                            @guest
                                
                            <div>
                                <h1>welcome Guest // this is Medlet backend Task </h1>
                                <p> it was crreated by Musab Al-Zoubi </p>

                                <ol>
                                    <li>
                                        If you are a new user, you can register 
                                    </li>
                                    <li>
                                        if you are a registered user, you can log in at any time
                                    </li>
                                </ol>
                            </div>
                            @endguest

                            
                            @php
                            $userRole = Auth::user()->role->id ?? null;
                        @endphp
                        
                        {{-- @if ($userRole == 1)         

                        <div>
                            <h1>welcome {{Auth::user()->name}} // this is Medlet backend Task </h1>
                            <p> it was crreated by Musab Al-Zoubi </p>

                            You are  {{$userRole = Auth::user()->role->name}} , you can 
                            <ol>
                                <li>
                                                            </li>
                                <li>
                                    if you are a registered user, you can log in at any time
                                </li>
                            </ol>
                        </div>

                        </div>


                    </div>
                    <!-- / Content --> --}}


@endsection