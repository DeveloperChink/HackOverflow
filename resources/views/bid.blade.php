<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proposed Mandaue Sports Center</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Script --}}
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div class="app">
        @include('partials.nav')
        <div class="container-fluid pb-5" style="background-color: #DCEEFB">
            <div class="container">

                {{-- back button --}}
                <div class="pt-3" style="font-size: 16px;">
                    <a href="{{ url('/projects') }}" class="text-dark text-center">
                        <i class="fa fa-chevron-left"></i> 
                        Back to all projects
                    </a>
                </div>

                <div class="pt-3" style="font-size: 32px;">Overview</div>
                {{-- jumbotron --}}
                <div class="row p-4 mt-3 d-flex align-items-center" style="background-color: #0F609B; border-radius: 20px;">
                    <div class="col-lg-6 col-sm-12">
                        <div class="page-3-title">Project Name</div>
                        <div class="d-flex align-items-center">
                            <div class="page-3-desc mr-3">Road Widening at Brgy. Tabok</div>
                            <div class="pt-1 pb-1 pr-2 pl-2" style="font-size: 16px; border-radius: 100px; background-color:gray">
                                <span class="h6" style="color:white;">Open</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="page-3-title">Site Location</div>
                        <div class="page-3-desc">Paknaan, Mandaue City</div>
                    </div>
                
                </div>

                {{-- implementing agency and etc --}}
                {{-- <div class="row d-flex mt-4 justify-content-center">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div style="color:#829AB1;">Implementing Agency</div>
                        <div class="h3" style="color:#334E68; font-size: 24px;">CPDO</div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div style="color:#829AB1;">Development Partner</div>
                        <div class="h3" style="color:#334E68; font-size: 24px;">ZENISUS CONTRACTORS</div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div style="color:#829AB1;">Contractor</div>
                        <div class="h3" style="color:#334E68; font-size: 24px;">PLD CONSTRUCTION. & DEV'T INC.</div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 ml-auto">
                        <div style="color:#829AB1;">Implementation Date</div>
                        <div class="h3" style="color:#334E68; font-size: 24px;">May 16, 2019</div>
                    </div>
                </div> --}}

                {{-- description --}}
                <div class="row pt-4">
                    <div class="col-12 text-justify">
                        {{-- <div class="text-justify" style="color:#829AB1;">
                            
                        </div> --}}
                        <div class="font-weight-bold">
                            Description
                        </div>
                        <p>
                            Republic of the Philippines <br>
                            Province of Cebu <br>
                            Municipality of Mandaue <br>
                            Tabok, Mandaue
                        </p>

                        <p>
                            INVITATION TO BID <br>
                            ITB No./PhilGEPS Reference No. 7184235
                        </p>
                        <p>
                            Road Widening at Brgy. Tabok
                            (Barangay Tabok , Mandaue, Cebu)
                        </p>
                        <p>
                            1. The Local Government of Mandaue through the Land Bank of the Philippines Cebu intends to apply the sum of P 59,973,000.00 being the Approved Budget for the Contract (ABC) to payments under the contract for Concreting of Mandaue Circumferential Road (Bira-Bira-Caanawan Section) at Barangay Magsidel , Mandaue, Cebu. Bids received in excess of the ABC shall be automatically rejected at bid opening. <br>
                            2. The Local Government of Mandaue now invites bids for Concreting of Mandaue Circunferential Road (Bira-Bira-Caanawan Section) at Barangay Magsidel , Mandaue, Cebu. To be eligible to bid for this Contract, a contractor must meet the following major requirement: a) PCAB LICENSE for size range: at least Medium A License Category: B, b) completion of similar contract costing at least 50% of the ABC and c) Net Financial Contracting Capacity (NFCC) at least equal to ABC. The complete description of an eligible bidder is contained in the Bidding Documents, particularly, in Section II. Instructions to Bidders. The Approved Budget for the Contract (ABC) P 59,973,000.00 and Contract Duration for these project is 360 Calendar Days. <br>
                            3. Bidding will be conducted through open competitive bidding procedures using non-discretionary “pass/fail” criterion as specified in the 2016 Revised Implementing Rules and Regulations (IRR) of Republic Act 9184 (RA 9184), otherwise known as the “Government Procurement Reform Act.” <br>
                            Bidding is restricted to Filipino citizens/sole proprietorships, cooperatives, and partnerships or organizations with at least seventy five percent (75%) interest or outstanding capital stock belonging to citizens of the Philippines.
                            Interested bidders may obtain further information from Bids and Awards Committee of the Local Government of Mandaue and inspect the Bidding Documents at the address given below from 8;00am to 5:00pm, Monday to Friday. <br>
                            4. A complete set of Bidding Documents may be acquired by interested bidders on August 19-5-Oct 2020 from the address below Bids and Awards Committee, Municipal Hall Building, Poblacion, Mandaue, Cebu upon payment of a nonrefundable fee in the amount of P 50,000.00. <br>
                            It may also be downloaded free of charge from the website of the Philippine Government Electronic Procurement System (PhilGEPS) and the website of the Procuring Entity, provided that bidders shall pay the applicable fee for the Bidding Documents not later than the submission of their bids. <br>
                            5. The Bids and Awards Committee will hold a Pre-Bid Conference on August 26, 2020, 10:00 am at the BAC Conference Room, Municipal Hall, Poblacion, Mandaue, Cebu, which shall be open to prospective bidders. <br>
                            6. Bids must be duly received by the BAC Secretariat at the address below on or before October 5, 2020, 9:00 am. All bids must be accompanied by a bid security in any of the acceptable forms and in the amount stated in ITB Clause 18.
                            Bid opening shall be on October 5, 2020, 10:00 am at BAC Conference Room, Municipal Hall, Poblacion, Mandaue, Cebu. Bids will be opened in the presence of the bidders’ representatives who choose to attend at the address below. Late bids shall not be accepted. <br>
                            7. The Local Government of Mandaue reserves the right to reject any and all bids, declare a failure of bidding, or not award the contract at any time prior to contract award in accordance with Section 41 of RA 9184 and its IRR, without thereby incurring any liability to the affected bidder or bidders. <br>
                            8. For further information, please refer to: <br>
                        </p>
                        <p>
                            Sgd). Juan dela Cruz <br>
                            Chairman, Bids and Awards Committee <br>
                            +639474681505 <br>
                            juandelacruz@gmail.com <br>
                        </p>

                    </div>
                </div>

                {{-- blockchain information --}}
                {{-- <div class="font-weight-bold mt-4" style="font-size: 24px; color:#334E68;">
                    Blockchain Information
                </div>
                <div class="row pt-3">
                    <div class="col-lg-6 col-sm-12 ">
                        <div style="font-size: 16px; color: #334E68; font-weight: bold;">Transaction Hash</div>
                        <div class="mb-2" style="font-size: 16px; color: #334E68;">
                            <a href="https://etherscan.io/block/10707827" class="text-primary" target="_blank">
                                0x44fcbb26b926e21239dbbba3b56d1f3b879b057b2e839bee1b9f0f9d1e9c8769
                            </a>
                        </div>
                        <div style="font-size: 16px; color: #334E68; font-weight: bold;">Published</div>
                        <div class="mb-2" style="font-size: 16px; color: #334E68;">August 22, 2020</div>
                        <div style="font-size: 16px; color: #334E68; font-weight: bold;">Contract Number</div>
                        <div class="mb-2" style="font-size: 16px; color: #334E68;">3412</div>
                        <div style="font-size: 16px; color: #334E68; font-weight: bold;">Block Number</div>
                        <div class="mb-2" style="font-size: 16px; color: #334E68;">10707827</div>
                        <div style="font-size: 16px; color: #334E68; font-weight: bold;">Signed Contract</div>
                        <div class="mb-2" style="font-size: 16px; color: #334E68;">3312</div>
                    </div>
                    <div class="col-lg-6 col-sm-12 embed-responsive embed-responsive-21by9">
                        <iframe style="border-radius: 15px; class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15699.893764555663!2d123.94973872740314!3d10.344008631852327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9983c02be749d%3A0xac497e175a8ececb!2sPaknaan%2C%20Mandaue%20City%2C%20Cebu!5e0!3m2!1sen!2sph!4v1598095303551!5m2!1sen!2sph" width="600" height="260" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div> --}}

                {{-- bidding table --}}
                <div class="d-flex align-items-center mt-5">
                    <div style="font-size: 24px; color: #334E68; font-weight: bold;">
                        Current Biddings
                    </div>
                    <div class="ml-auto">
                    <a href="{{url('/applybid')}}" class="btn text-white font-weight-bold" style="background-color:#003E6B;font-size: 12px; border-radius: 100px;">
                            Apply Bid
                        </a>
                    </div>
                </div>
                <div class="table-responsive" style="border-radius: 10px !important;">
                    <table class="table mt-3">
                        <thead>
                          <tr class="text-table-color bg-white">
                            <th scope="col">Project Management Office</th>
                            <th scope="col">Mode of Procurement</th>
                            <th scope="col">Pre-Proc Conference</th>
                            <th scope="col">Ads/Post of IB</th>
                            <th scope="col">Source of Funds</th>
                            <th scope="col" class="text-right">Total</th>
                            <th scope="col" class="text-right">MOOE</th>
                            <th scope="col" class="text-right">CO</th>
                          </tr>
                        </thead>
                        <tbody class="text-table-color">
                          <tr style="background-color:#F0F4F8;">
                            <td>PLD CONSTRUCTION. & DEV'T INC.</td>
                            <td>Negotiated Procurement</td>
                            <td>June-18</td>
                            <td>June-18</td>
                            <td>General Funds</td>
                            <td>P 51,957,925.00</td>
                            <td>P 47,321,721.00</td>
                            <td>P 4,636,204</td>
                          </tr>
                          <tr class="bg-white">
                            <td>HD Engineers+Builders</td>
                            <td>Negotiated Procurement</td>
                            <td>July-7</td>
                            <td>July-7</td>
                            <td>General Funds</td>
                            <td>P 63,321,552.00</td>
                            <td>P 60,957,213.00</td>
                            <td>P 2,364,339</td>
                          </tr>
                          <tr style="background-color:#F0F4F8;">
                            <td>Golden Horse Construction Services</td>
                            <td>Negotiated Procurement</td>
                            <td>May-3</td>
                            <td>May-3</td>
                            <td>General Funds</td>
                            <td>P 60,111,321.00</td>
                            <td>P 59,111,000.00</td>
                            <td>P 1,000,321</td>
                          </tr>
                        </tbody>
                    </table>
                </div>

                {{-- satisfaction box --}}
                {{-- <div class="row mt-5">
                    <div class="mx-auto col-lg-8 col-sm-12 bg-white text-center p-5" style="border-radius: 20px;">
                        <div style="color: #486581; font-size: 24px;">
                            Are you happy with this project?
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            <a href="">
                                <i class="fa fa-smile-o fa-3x mr-3" aria-hidden="true" style="color:#0F609B;"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-frown-o fa-3x" aria-hidden="true" style="color:#0F609B;"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</body>
</html>

{{-- 3rd page
first component:project details
    -project name
    -description
    -implementing agency/ies
    -development partner
    -contractor/supplier
    -status(ongoing/finished/pending)
second component: blockchain details
    -transaction id(fake hash)
    -published, block number, contract index, signed contract
third component: location
    -maps --}}