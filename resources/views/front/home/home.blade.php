@extends('front.layouts.customLayout')
@section('title')
    {{ getAppName() }}
@endsection
@section('content')

    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5>Your Digital Identity. Simplified.</h5>
                    <h4>Save Environment! Go Green!</h4>
                    <h3>Welcome to the future of digital identity management.</h3>
                    <p>
                        This site offers a user-friendly, secure, and scalable solution to streamline your digital
                        experience. Explore and discover our innovative approach to virtual networking, designed to empower
                        you.
                    </p>
                    @if (empty(getLogInUser()))
                        <a href="{{ route('login') }}" data-turbo="false">
                            {{-- {{ __('auth.sign_in') }} --}}
                            Get Started
                        </a>
                    @else
                        @if (getLogInUser()->hasrole('admin') || getLogInUser()->hasrole('user'))
                            <a href="{{ route('admin.dashboard') }}" data-turbo="false">
                                {{ __('messages.dashboard') }}
                            </a>
                        @endif
                        @if (getLogInUser()->hasrole('super_admin'))
                            <a href="{{ route('sadmin.dashboard') }}" data-turbo="false">
                                {{ __('messages.dashboard') }}
                            </a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="welcome">
        <div class="container">
            <div class="welcome-body">
                <h4>Welcome To Us</h4>
                <h1>Our Feature</h1>
                <p>
                    Our project, Digital Identity And Virtual Networking Hub, addresses
                    the fragmented and insecure nature of current digital identity
                    management systems. By developing a unified and secure platform, we
                    aim to enhance user experience and ensure seamless access across
                    various platforms.
                </p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mentor">
                            <div class="icon">
                                <img src={{ asset('custom/images/Forma1.png') }} alt="forma1" />
                            </div>
                            <h3>User-Friendly Interface</h3>
                            <p>
                                Our platform boasts an intuitive and easy-to-navigate
                                interface, ensuring a smooth user experience.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mentor">
                            <div class="icon">
                                <img src={{ asset('custom/images/Forma2.png') }} alt="forma2" />
                            </div>
                            <h3>Security Measures</h3>
                            <p>
                                We prioritize your security with advanced encryption
                                techniques and biometric authentication methods.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mentor">
                            <div class="icon">
                                <img src={{ asset('custom/images/Forma3.png') }} alt="forma3" />
                            </div>
                            <h3>Scalability</h3>
                            <p>
                                Designed to handle large user loads, our platform ensures
                                optimal performance and scalability.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mentor">
                            <div class="icon">
                                <img src={{ asset('custom/images/Forma4.png') }} alt="forma4" />
                            </div>
                            <h3>JU Smart Integration</h3>
                            <p>
                                Our solution includes IoT sensors for comprehensive
                                environmental monitoring, contributing to smart initiatives.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="appointment">
        <div class="container">
            <div class="appointment-body">
                <h1>Feeling Good About Making a Difference.</h1>
                <a href={{ route('register') }}>Start Your Journey</a>
            </div>
        </div>
    </section>
    <section class="working-process">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="working-process-body">
                        <h4>How Do I Work?</h4>
                        <h1>Four Featured Services, Better Users</h1>
                        <div class="processes">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="step">
                                        <div class="icon">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        <h3 class="text-center">Registration and Onboarding</h3>
                                        <p>User Signup, Verification, Profile Setup</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="step">
                                        <div class="icon">
                                            <i class="fas fa-chart-pie"></i>
                                        </div>
                                        <h3 class="text-center">Digital Identity Management</h3>
                                        <p>Dashboard, Data Collection, Show Vcard.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="step">
                                        <div class="icon">
                                            <i class="fas fa-cog"></i>
                                        </div>
                                        <h3 class="text-center">
                                            Continuous Monitoring and Security
                                        </h3>
                                        <p>
                                            Real-Time Monitoring, Threat Detection, Regular Updates
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="step">
                                        <div class="icon">
                                            <i class="fas fa-clipboard-list"></i>
                                        </div>
                                        <h3 class="text-center">Future Enhancements</h3>
                                        <p>
                                            Ongoing Development, User-Centric Design, Scalability
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="process-video">
                        <div class="video">
                            <button type="button" data-toggle="modal" data-target=".video1">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="modal fade video1" tabindex="-1" role="dialog"
                                area-labelledbby="mylaggeModalLabel" area-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <video width="100%" height="100%" autoplay>
                                            <source src={{ asset('custom/video/video.mp4') }} type="video/mp4" />
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="counter-content">
                        <i class="fas fa-chart-line icon"></i>
                        <h1 class="count">250+</h1>
                        <p class="count-name">Cases Cimpleted</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="counter-content">
                        <i class="fas fa-briefcase icon"></i>
                        <h1 class="count">05+</h1>
                        <p class="count-name">Years Of Experience</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="counter-content">
                        <i class="fas fa-award icon"></i>
                        <h1 class="count">05+</h1>
                        <p class="count-name">Award Own</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="counter-content">
                        <i class="far fa-thumbs-up icon"></i>
                        <h1 class="count">97%</h1>
                        <p class="count-name">Satisfied Users</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="faq-body">
                        <h4>FAQ</h4>
                        <h1>Frequently Asked Questions</h1>
                        <div id="faq-collapse" class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="faq-find" data-toggle="collapse" data-parent="faq-collapse"
                                            href="#collapse1">
                                            <span> <i class="far fa-plus-square"></i></span>What is
                                            Digital Identity And Virtual Networking Hub?
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <p class="panel-body">
                                        Digital Identity And Virtual Networking Hub is a
                                        revolutionary platform that allows users to manage their
                                        digital identities securely and conveniently. It offers a
                                        centralized solution for storing, accessing, and
                                        controlling personal and professional information in
                                        today's digital world.
                                    </p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="faq-find" data-toggle="collapse" data-parent="faq-collapse"
                                            href="#collapse2"><span><i class="far fa-plus-square"></i> </span> Can I
                                            access my digital identity from anywhere?</a>
                                    </h3>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <p class="panel-body">
                                        Yes, our platform is accessible from anywhere with an
                                        internet connection. Whether you're at home, in the
                                        office, or on the go, you can easily access and manage
                                        your digital identity using any device.
                                    </p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="faq-find" data-toggle="collapse" data-parent="faq-collapse"
                                            href="#collapse3"><span><i class="far fa-plus-square"></i> </span>Why do
                                            I need a digital identity management system?</a>
                                    </h3>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <p class="panel-body">
                                        In an increasingly digitalized world, managing and
                                        protecting your digital identity is crucial. Our platform
                                        helps you securely store and manage your personal and
                                        professional information, control access to it, and ensure
                                        its integrity and privacy.
                                    </p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="faq-find" data-toggle="collapse" data-parent="faq-collapse"
                                            href="#collapse4"><span><i class="far fa-plus-square"></i> </span> How
                                            does the platform ensure security?</a>
                                    </h3>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <p class="panel-body">
                                        We prioritize security by implementing advanced encryption
                                        techniques, multi-factor authentication, and biometric
                                        verification. All data is stored securely, and we
                                        regularly update our systems to protect against emerging
                                        threats.
                                    </p>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="faq-find" data-toggle="collapse" data-parent="faq-collapse"
                                            href="#collapse5"><span><i class="far fa-plus-square"></i> </span>Can I
                                            customize my digital identity profile?</a>
                                    </h3>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <p class="panel-body">
                                        Yes, you can customize your digital identity profile to
                                        include personal and professional information, contact
                                        details, preferences, and more. You have full control over
                                        what information you share and who can access it.
                                    </p>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="faq-find" data-toggle="collapse" data-parent="faq-collapse"
                                            href="#collapse6"><span><i class="far fa-plus-square"></i> </span>Is the
                                            platform compatible with other applications?</a>
                                    </h3>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse">
                                    <p class="panel-body">
                                        Yes, our platform provides APIs for integration with other
                                        applications and services. You can easily connect your
                                        digital identity with third-party services to streamline
                                        workflows and enhance functionality.
                                    </p>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="faq-find" data-toggle="collapse" data-parent="faq-collapse"
                                            href="#collapse7"><span><i class="far fa-plus-square"></i> </span>What
                                            are the future plans for the platform?</a>
                                    </h3>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse">
                                    <p class="panel-body">
                                        We are continuously working on enhancing our platform with
                                        new features, improvements, and updates. Our goal is to
                                        provide a seamless and secure digital identity management
                                        experience for our users.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-image">
                        <img src={{ asset('custom/images/faq-Image.jpg') }} alt="faq-image" />
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
