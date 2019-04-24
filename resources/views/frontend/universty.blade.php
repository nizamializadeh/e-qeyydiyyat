@extends('layouts.frontend.frontend')
@section('content')
    <div class="breadcumb-area bg-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Universitet</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area end -->
    <div class="course-area ptb-120 bg-2">
        <div class="course-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 col-sm-10">
                        <div class="course-form">
                            <ul>
                                <li>
                                    <select class="select-form" name="" id="country">
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="grid">
                        <div class="course-active2 course-col3">
                            <div class="col-xs-12">
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/1.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Web Design & DEVELOPMENT</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/2.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Electrical Engineering</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/3.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Agricultural Management</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/4.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Actuarial Science</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/5.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Actuarial Science</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/6.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Photoghaphy Master</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/7.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Web Design & DEVELOPMENT</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/8.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Electrical Engineering</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/9.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Agricultural Management</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/1.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Actuarial Science</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/2.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Actuarial Science</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item">
                                    <div class="course-img">
                                        <img src="img/cource/col3/3.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Photoghaphy Master</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="list">
                        <div class="course-list-active">
                            <div class="col-xs-12">
                                <div class="course-item clear">
                                    <div class="course-img">
                                        <img src="img/cource/list/1.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Web Design & DEVELOPMENT</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment instruments are alive.All their equipment and instruments are alive.The face of the moon was in shadow.The spectacle before us indeed sublime.All their equipment and instruments are alive.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item clear">
                                    <div class="course-img">
                                        <img src="img/cource/list/2.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Web Design & DEVELOPMENT</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment instruments are alive.All their equipment and instruments are alive.The face of the moon was in shadow.The spectacle before us indeed sublime.All their equipment and instruments are alive.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item clear">
                                    <div class="course-img">
                                        <img src="img/cource/list/3.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Web Design & DEVELOPMENT</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment instruments are alive.All their equipment and instruments are alive.The face of the moon was in shadow.The spectacle before us indeed sublime.All their equipment and instruments are alive.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item clear">
                                    <div class="course-img">
                                        <img src="img/cource/list/4.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Web Design & DEVELOPMENT</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment instruments are alive.All their equipment and instruments are alive.The face of the moon was in shadow.The spectacle before us indeed sublime.All their equipment and instruments are alive.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                                <div class="course-item clear mb-0">
                                    <div class="course-img">
                                        <img src="img/cource/list/5.jpg" alt="" />
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="#">Web Design & DEVELOPMENT</a></h3>
                                        <div class="course-meta">
                                            <ul>
                                                <li><i class="fa fa-folder-o"></i> Mathematics, Science</li>
                                                <li><i class="fa fa-clock-o"></i> 124 Hour</li>
                                            </ul>
                                        </div>
                                        <p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment instruments are alive.All their equipment and instruments are alive.The face of the moon was in shadow.The spectacle before us indeed sublime.All their equipment and instruments are alive.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>
                                        <a href="#" class="btn-style">apply now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection