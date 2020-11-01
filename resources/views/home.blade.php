@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.ffln4-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.ffln4-1.fna.fbcdn.net&_nc_ohc=_FrOe_eq_hQAX-X3vTs&oh=ca6c038ba35b1ee4ae7f28248bae511e&oe=5FC55E67" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username  }}</h1></div>
            <div class="d-flex">
                <div class="pr-3"><strong>50</strong> postagens</div>
                <div class="pr-3"><strong>60k</strong> seguidores</div>
                <div class="pr-3"><strong>20k</strong> seguindo</div>
            </div>

            <div class="pt-3 font-weight-bold">teste.com</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">teste.com</a></div>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="https://instagram.ffln4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.112.929.929a/s640x640/118605679_1451236268600542_2050874606066190756_n.jpg?_nc_ht=instagram.ffln4-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=SF2iCyey8U4AX8EaUmb&oh=240be0373f1cf1850e9857ab326bc348&oe=5FC4B223" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://instagram.ffln4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.112.929.929a/s640x640/118605679_1451236268600542_2050874606066190756_n.jpg?_nc_ht=instagram.ffln4-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=SF2iCyey8U4AX8EaUmb&oh=240be0373f1cf1850e9857ab326bc348&oe=5FC4B223" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://instagram.ffln4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.112.929.929a/s640x640/118605679_1451236268600542_2050874606066190756_n.jpg?_nc_ht=instagram.ffln4-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=SF2iCyey8U4AX8EaUmb&oh=240be0373f1cf1850e9857ab326bc348&oe=5FC4B223" class="w-100">
            </div>
    </div>

    </div>
</div>
@endsection
