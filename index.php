<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
    body {
        overflow-x: hidden;
        padding-top: 50px;
    }

/* Toggle Styles */

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 0;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #sidebar-wrapper {
        width: 0;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="assets/images/logo.png" height="20"></a>
                <ul class="nav navbar-nav">
                    <li><a href="#" id="menu-toggle"><i class="fa fa-bars"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Page</a>
                </li>
                <li>
                    <a href="#">Other</a>
                </li>
                <li>
                    <a href="#">Treasure</a>
                </li>
            </ul>
        </div>
        <!--End sidebar-->
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare ullamcorper odio, nec placerat neque gravida in. Aliquam volutpat posuere sem at sagittis. Phasellus metus urna, molestie non purus a, consectetur commodo felis. Maecenas ultricies, odio a auctor fringilla, neque velit aliquam nisi, sit amet dictum nulla urna vel est. Proin at vehicula risus. Vivamus blandit nunc orci. Vestibulum porta finibus tristique.

Etiam efficitur at urna id pulvinar. Nulla dictum imperdiet dolor. Proin sed feugiat erat, egestas porttitor sem. Sed convallis nibh auctor lobortis luctus. Nullam elit est, venenatis sit amet enim vitae, finibus pellentesque mi. Mauris ullamcorper nisl ac felis dapibus, vitae vestibulum augue facilisis. Donec vitae ante sit amet neque gravida convallis. Maecenas eros turpis, congue sit amet laoreet eu, ultricies vitae nisl. Nullam lacinia volutpat felis, vel aliquam dui bibendum in. Pellentesque at velit et erat dictum congue sed id turpis. Cras mattis augue sit amet luctus tincidunt. Nam vel cursus mauris. Mauris a velit in ante gravida consectetur.

Aliquam convallis lacus metus. Vestibulum pellentesque, sapien at suscipit cursus, augue odio bibendum nibh, a pretium orci tellus vel ex. Vivamus dapibus nunc lectus, eu consequat ante tristique non. Quisque lobortis bibendum urna vel ornare. Etiam sed rhoncus ex. In lorem dui, hendrerit a velit ac, suscipit molestie dolor. Cras volutpat arcu at mollis auctor. Morbi vitae pretium nulla. Donec sit amet cursus ligula, vitae fermentum sapien. Nam suscipit rhoncus dui, in porttitor lectus dignissim vel. Cras eu eros at erat pulvinar vulputate. Etiam nulla leo, aliquet quis tempus sed, fringilla vitae eros. Nunc placerat pretium erat vel tincidunt.

Fusce sollicitudin porta dolor. Nulla pretium pharetra porta. Vivamus vitae rhoncus diam, vitae convallis ipsum. Vestibulum bibendum lacus non nisl sodales eleifend. Ut egestas sapien quis nisl cursus, ac viverra felis hendrerit. Mauris interdum consectetur vulputate. Morbi quis magna ut risus facilisis pulvinar. Maecenas sed purus urna. Pellentesque porttitor neque ac volutpat posuere. Mauris vestibulum cursus arcu et tincidunt. Sed augue mauris, gravida ac luctus eu, euismod vitae risus. Etiam sit amet elit diam. Etiam ut malesuada dui, nec eleifend felis. Quisque dignissim nisl ac eros condimentum pellentesque. Nulla sagittis tristique ornare.

Donec sed rutrum velit, et suscipit purus. Nullam consectetur eget ipsum ac euismod. Phasellus et malesuada nunc, in vehicula diam. Sed dignissim nulla dapibus magna interdum ornare. In faucibus molestie viverra. Aenean in porttitor odio. Duis placerat in velit a malesuada. Nunc semper in sapien nec imperdiet. Integer ac tellus vitae massa egestas dictum et non lectus. Donec non pulvinar erat, id posuere massa. Suspendisse ut pulvinar lectus. Sed ac posuere massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

Vivamus vitae ullamcorper urna. Morbi in dolor nunc. Praesent facilisis, nisi id mollis tincidunt, ipsum ex lacinia quam, vitae eleifend ex ex in lorem. Suspendisse potenti. Integer vitae convallis magna. Cras consequat eros mauris, a tristique ante sollicitudin dapibus. Vestibulum nulla urna, dignissim quis condimentum id, convallis id est. Nam ornare diam vitae mi tincidunt venenatis.

Aliquam erat volutpat. Etiam elit felis, pharetra quis odio a, suscipit aliquam ante. Donec luctus orci tellus, vitae aliquam est placerat a. Etiam pretium risus eu elementum interdum. Etiam odio dui, venenatis at nunc vitae, tincidunt mollis tellus. Donec pretium nisl est, vitae rutrum felis egestas nec. Nulla vel neque in risus pharetra vulputate. Quisque tempus imperdiet lacinia. In sed orci tortor. Curabitur molestie nisi dui, sed viverra elit dignissim nec.

Sed mi mauris, rutrum blandit massa sit amet, elementum malesuada lorem. Pellentesque quis nibh non leo egestas tempus id at massa. Duis pulvinar leo sed nunc gravida porta. Nulla justo dui, euismod eget ligula quis, semper gravida velit. Fusce laoreet aliquam metus id ullamcorper. Nam condimentum dui a tincidunt pharetra. Proin maximus arcu id diam tristique dignissim. Cras posuere diam vel pharetra pharetra. Integer eget ante lobortis, molestie est vitae, finibus augue. Quisque magna tortor, congue ac sem nec, vestibulum volutpat urna.

Aliquam ac est quis quam egestas imperdiet id vel justo. Proin a ligula ut eros dignissim tempor. Duis tellus mi, semper vel fermentum id, aliquet at ligula. Sed ac hendrerit turpis. Nunc commodo dolor lacus, sed posuere massa commodo eu. Nunc porttitor pretium pulvinar. Nunc vitae vestibulum metus, vel ornare orci. Nam eget enim ac turpis placerat ultricies. Aliquam et fringilla lectus, quis rhoncus orci. Sed lorem sem, porttitor id vehicula eu, egestas pulvinar odio. Maecenas aliquam orci diam, eget lobortis odio iaculis vel. Donec elementum lacus ut varius finibus. Morbi accumsan interdum porttitor. Nulla purus eros, hendrerit eget facilisis ut, facilisis vel leo. Nullam imperdiet enim vel metus bibendum mattis.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare ullamcorper odio, nec placerat neque gravida in. Aliquam volutpat posuere sem at sagittis. Phasellus metus urna, molestie non purus a, consectetur commodo felis. Maecenas ultricies, odio a auctor fringilla, neque velit aliquam nisi, sit amet dictum nulla urna vel est. Proin at vehicula risus. Vivamus blandit nunc orci. Vestibulum porta finibus tristique.

Etiam efficitur at urna id pulvinar. Nulla dictum imperdiet dolor. Proin sed feugiat erat, egestas porttitor sem. Sed convallis nibh auctor lobortis luctus. Nullam elit est, venenatis sit amet enim vitae, finibus pellentesque mi. Mauris ullamcorper nisl ac felis dapibus, vitae vestibulum augue facilisis. Donec vitae ante sit amet neque gravida convallis. Maecenas eros turpis, congue sit amet laoreet eu, ultricies vitae nisl. Nullam lacinia volutpat felis, vel aliquam dui bibendum in. Pellentesque at velit et erat dictum congue sed id turpis. Cras mattis augue sit amet luctus tincidunt. Nam vel cursus mauris. Mauris a velit in ante gravida consectetur.

Aliquam convallis lacus metus. Vestibulum pellentesque, sapien at suscipit cursus, augue odio bibendum nibh, a pretium orci tellus vel ex. Vivamus dapibus nunc lectus, eu consequat ante tristique non. Quisque lobortis bibendum urna vel ornare. Etiam sed rhoncus ex. In lorem dui, hendrerit a velit ac, suscipit molestie dolor. Cras volutpat arcu at mollis auctor. Morbi vitae pretium nulla. Donec sit amet cursus ligula, vitae fermentum sapien. Nam suscipit rhoncus dui, in porttitor lectus dignissim vel. Cras eu eros at erat pulvinar vulputate. Etiam nulla leo, aliquet quis tempus sed, fringilla vitae eros. Nunc placerat pretium erat vel tincidunt.

Fusce sollicitudin porta dolor. Nulla pretium pharetra porta. Vivamus vitae rhoncus diam, vitae convallis ipsum. Vestibulum bibendum lacus non nisl sodales eleifend. Ut egestas sapien quis nisl cursus, ac viverra felis hendrerit. Mauris interdum consectetur vulputate. Morbi quis magna ut risus facilisis pulvinar. Maecenas sed purus urna. Pellentesque porttitor neque ac volutpat posuere. Mauris vestibulum cursus arcu et tincidunt. Sed augue mauris, gravida ac luctus eu, euismod vitae risus. Etiam sit amet elit diam. Etiam ut malesuada dui, nec eleifend felis. Quisque dignissim nisl ac eros condimentum pellentesque. Nulla sagittis tristique ornare.

Donec sed rutrum velit, et suscipit purus. Nullam consectetur eget ipsum ac euismod. Phasellus et malesuada nunc, in vehicula diam. Sed dignissim nulla dapibus magna interdum ornare. In faucibus molestie viverra. Aenean in porttitor odio. Duis placerat in velit a malesuada. Nunc semper in sapien nec imperdiet. Integer ac tellus vitae massa egestas dictum et non lectus. Donec non pulvinar erat, id posuere massa. Suspendisse ut pulvinar lectus. Sed ac posuere massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

Vivamus vitae ullamcorper urna. Morbi in dolor nunc. Praesent facilisis, nisi id mollis tincidunt, ipsum ex lacinia quam, vitae eleifend ex ex in lorem. Suspendisse potenti. Integer vitae convallis magna. Cras consequat eros mauris, a tristique ante sollicitudin dapibus. Vestibulum nulla urna, dignissim quis condimentum id, convallis id est. Nam ornare diam vitae mi tincidunt venenatis.

Aliquam erat volutpat. Etiam elit felis, pharetra quis odio a, suscipit aliquam ante. Donec luctus orci tellus, vitae aliquam est placerat a. Etiam pretium risus eu elementum interdum. Etiam odio dui, venenatis at nunc vitae, tincidunt mollis tellus. Donec pretium nisl est, vitae rutrum felis egestas nec. Nulla vel neque in risus pharetra vulputate. Quisque tempus imperdiet lacinia. In sed orci tortor. Curabitur molestie nisi dui, sed viverra elit dignissim nec.

Sed mi mauris, rutrum blandit massa sit amet, elementum malesuada lorem. Pellentesque quis nibh non leo egestas tempus id at massa. Duis pulvinar leo sed nunc gravida porta. Nulla justo dui, euismod eget ligula quis, semper gravida velit. Fusce laoreet aliquam metus id ullamcorper. Nam condimentum dui a tincidunt pharetra. Proin maximus arcu id diam tristique dignissim. Cras posuere diam vel pharetra pharetra. Integer eget ante lobortis, molestie est vitae, finibus augue. Quisque magna tortor, congue ac sem nec, vestibulum volutpat urna.

Aliquam ac est quis quam egestas imperdiet id vel justo. Proin a ligula ut eros dignissim tempor. Duis tellus mi, semper vel fermentum id, aliquet at ligula. Sed ac hendrerit turpis. Nunc commodo dolor lacus, sed posuere massa commodo eu. Nunc porttitor pretium pulvinar. Nunc vitae vestibulum metus, vel ornare orci. Nam eget enim ac turpis placerat ultricies. Aliquam et fringilla lectus, quis rhoncus orci. Sed lorem sem, porttitor id vehicula eu, egestas pulvinar odio. Maecenas aliquam orci diam, eget lobortis odio iaculis vel. Donec elementum lacus ut varius finibus. Morbi accumsan interdum porttitor. Nulla purus eros, hendrerit eget facilisis ut, facilisis vel leo. Nullam imperdiet enim vel metus bibendum mattis.</p>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End content -->
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>