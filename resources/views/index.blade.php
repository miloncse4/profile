
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="{{asset('forntend')}}/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home" style="background: url( {{asset('/uploads/banner_photo/'.$data->bc_img)}} ) no-repeat center;">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">{{$data->title}}</div>
                <div class="text-2">{{$data->sub_title}}</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="{{asset('/uploads/about_photo/'.$about->ab_img)}}" alt="">
                </div>
                <div class="column right">
                    <div class="text">{{$about->title}} and I'm a <span class="typing-2"></span></div>
                    <p>{{$about->description}}</p>
                    <a href="#">Download CV
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                @if(count($servics) > 0)
                @foreach($servics as $servic)
                <div class="card">
                    <div class="box">
                        <i class="{{$servic->icon}}"></i>
                        <div class="text">{{$servic->title}}</div>
                        <p>{{$servic->description}}</p>
                    </div>
                </div>
                @endforeach
                @endif
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">{{ $skill->name }}</div>
                    <p>{{ $skill->sk_description }}</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    @if(count($exprin) > 0)
                    @foreach ($exprin as $data)
                    <div class="bars">
                        <div class="info">
                            <span>{{ $data->sk_title }}</span>
                            <span>{{ $data->sk_exp }}%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                @if(count($team)> 0)
                @foreach ($team as $tea)
                <div class="card">
                    <div class="box">
                        <img src="{{asset('/uploads/team/'.$tea->t_img)}}" alt="{{ $tea->title }}">
                        <div class="text">{{ $tea->title }}</div>
                        <p>{{ $tea->description }}</p>
                    </div>
                </div>
                @endforeach
             @endif
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>We believe in serving our customers and serving the globe. Fast, high-quality, professionally web site make at affordable prices, plus a commitment to making the world a better place — that’s what makes us jon j portfolio.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">{{ $contact->name }}</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">{{ $contact->address }}</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">{{ $contact->email }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="message" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="#">Milon CSE</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="{{asset('forntend')}}/js/script.js"></script>
</body>
</html>
