<?php
include("header.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container -->
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-success card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/me.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Agus Maulana Yusup</h3>

                <p class="text-muted text-center">Web Programmer</p>

                <hr>

                

                <a href="CV_AgusMaulanaYusup.pdf" target="t_blank" class="btn btn-success btn-block"><i class="fas fa-download mr-1"></i> <b>Download CV</b></a>
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-user-check mr-1"></i> Personality</strong>
                <p class="text-muted">
                Seseorang yang analitis, berwatak hati–hati, mampu memusatkan perhatian, cenderung perfeksionis dan akan mengisolasi diri jika diperlukan untuk menyelesaikan pekerjaan. Berorientasi pada kualitas dan akan bekerja dengan keras untuk menyelesaikan pekerjaan dengan benar.
                </p>

                <hr>

                <strong><i class="fas fa-user-graduate mr-1"></i> Education</strong>
                <p class="text-muted">
                  STMIK TASIKMALAYA (S1 TEKNIK INFORMATIKA)
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted">Tasikmalaya, Jawa Barat</p>

                <hr>

                <strong><i class="fas fa-cogs mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">PHP</span>
                  <span class="tag tag-success">Codeigniter</span>
                  <span class="tag tag-info">REST API</span>
                  <span class="tag tag-warning">Javascript</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Tidak ada kata untuk ragu, Bismillah.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-success card-outline">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#education" data-toggle="tab">Education</a></li>
                  <li class="nav-item"><a class="nav-link" href="#skill" data-toggle="tab">Skill</a></li>
                  <li class="nav-item"><a class="nav-link" href="#courses" data-toggle="tab">Training & Courses</a></li>
                  <li class="nav-item"><a class="nav-link" href="#seminar" data-toggle="tab">Seminar</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="education">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-primary">
                        <i class="fas fa-user mr-1"></i> Sekarang
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-university bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2018 - Sekarang</span>

                          <h3 class="timeline-header"><a href="#">STMIK TASIKMALAYA</a> Teknik Informatika</h3>

                          <div class="timeline-body">
                            <ul>
                              <li>Degree : S1</li>
                              <li>Major : Teknik Informatika</li>
                              <li>Final Score : NA</li>
                            </ul>  
                          </div>
                        
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                        <i class="fas fa-user-graduate mr-1"></i> 2017
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-university bg-success"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2015 - 2017</span>

                          <h3 class="timeline-header"><a href="#" class="text-success">LP3I TASIKMALAYA</a> Informatika Komputer</h3>

                          <div class="timeline-body">
                            <ul>
                              <li>Degree : Vokasi</li>
                              <li>Major : Informatika Komputer</li>
                              <li>Final Score : 3,60/4,00</li>
                            </ul>  
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-info">
                        <i class="fas fa-user-graduate mr-1"></i> 2015
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-university bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2012 - 2015</span>

                          <h3 class="timeline-header"><a href="#" class="text-info">SMA NEGERI 5 TASIKMALAYA</a> IPA</h3>

                          <div class="timeline-body">
                            <ul>
                              <li>Degree : SMA</li>
                              <li>Major : IPA</li>
                              <li>Final Score : 87,5</li>
                            </ul>  
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="skill">

                    <table width="100%" cellpadding="3">
                      <tr>
                        <td width="30%">PHP Codeigniter</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                              <span>85%</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%">MySQL</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                              <span>85%</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%">REST API</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                              <span>75%</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%">Node.JS</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                              <span>60%</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%">PostgreSQL</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                              <span>65%</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%">HTML, CSS, JS</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                              <span>80%</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%">Java Android</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                              <span>75%</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%">GitHub</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                              <span>60%</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%">Postman</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                              <span>80%</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%">Microsoft Office</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                              <span>85%</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>

                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="courses">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse" id="accordion">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-warning">
                          Mei. 2021
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fab fa-node-js bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 17 Mei 2021</span>

                          <h3 class="timeline-header"><a class="text-warning" data-toggle="collapse" data-parent="#accordion" href="#collapse-1">Belajar Membuat Aplikasi Back-End untuk Pemula <span class="text-muted">(click to see more)</span></a> by Dicoding</h3>
                          <div id="collapse-1" class="panel-collapse collapse in">
                            <div class="timeline-body">
                              <ul>
                                <li>Learning Path : Back-End Develover</li>
                                <li>Level : Pemula</li>
                                <li>Technology : Cloud Computing | Web</li>
                                <li>Valid until : 17 Mei 2024</li>
                                <li>Notes : Diselenggarakan oleh Dicoding. Materi berisikan pemahaman tentang client-server, back-end, javascript framework NodeJS, REST API dll.</li>
                              </ul>
                              <div class="card-body">
                                <iframe frameborder="0" width="100%" height="500" src="dist/doc/sertifikat_course_Belajar Membuat Aplikasi Back-End untuk Pemula.pdf"></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-warning">
                          Apr. 2021
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fab fa-js bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 13 April 2021</span>

                          <h3 class="timeline-header"><a class="text-warning" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">Belajar Dasar Pemrograman JavaScript <span class="text-muted">(click to see more)</span></a> by Dicoding</h3>
                          <div id="collapse-2" class="panel-collapse collapse in">
                            <div class="timeline-body">
                              <ul>
                                <li>Learning Path : Back-End Develover</li>
                                <li>Level : Dasar</li>
                                <li>Technology : Web</li>
                                <li>Valid until : 13 April 2024</li>
                                <li>Notes : Diselenggarakan oleh Dicoding. Materi berisikan pengenalan tentang javascript, javascript fundamental, dasar – dasar pemrograman javascript dll.</li>
                              </ul>
                              <div class="card-body">
                                <iframe frameborder="0" width="100%" height="500" src="dist/doc/sertifikat_course_Belajar Dasar Pemrograman JavaScript.pdf"></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-primary">
                          Feb. 2021
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fab fa-python bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 10 Februari 2021</span>

                          <h3 class="timeline-header"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-3">Memulai Pemrograman Dengan Python <span class="text-muted">(click to see more)</span></a> by Dicoding </h3>
                          <div id="collapse-3" class="panel-collapse collapse in">
                            <div class="timeline-body">
                              <ul>
                                <li>Learning Path : Machine Learning Develover</li>
                                <li>Level : Dasar</li>
                                <li>Technology : Data | Machine Learning</li>
                                <li>Valid until : 10 Februari 2024</li>
                                <li>Notes : Diselenggarakan oleh Dicoding. Materi berisikan pengenalan tentang python, dasar – dasar pemrograman dengan menggunakan python dll.</li>
                              </ul>
                              <div class="card-body">
                                <iframe frameborder="0" width="100%" height="500" src="dist/doc/sertifikat_course_Memulai Pemrograman Dengan Python.pdf"></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->

                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          Oct. 2020
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fab fa-android bg-success"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 11 Oktober 2020</span>

                          <h3 class="timeline-header"><a class="text-success" data-toggle="collapse" data-parent="#accordion" href="#collapse-4">Belajar Fundamental Aplikasi Android <span class="text-muted">(click to see more)</span></a> by Dicoding </h3>
                          <div id="collapse-4" class="panel-collapse collapse in">
                            <div class="timeline-body">
                              <ul>
                                <li>Learning Path : Android Develover</li>
                                <li>Level : Menengah</li>
                                <li>Technology : Android</li>
                                <li>Valid until : 11 Oktober 2023</li>
                                <li>Notes : Diselenggarakan oleh Dicoding. Materi berisikan pengenalan android studio, fundamental, UI dan UX, background process, web API, local storage data dll.</li>
                              </ul>
                              <div class="card-body">
                                <iframe frameborder="0" width="100%" height="500" src="dist/doc/sertifikat_course_Belajar Fundamental Aplikasi Android.pdf"></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->

                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          Jun. 2020
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fab fa-android bg-success"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 11 juni 2020</span>

                          <h3 class="timeline-header"><a class="text-success" data-toggle="collapse" data-parent="#accordion" href="#collapse-5">Belajar Membuat Aplikasi Android untuk Pemula <span class="text-muted">(click to see more)</span></a> by Dicoding </h3>
                          <div id="collapse-5" class="panel-collapse collapse in">
                            <div class="timeline-body">
                              <ul>
                                <li>Learning Path : Android Develover</li>
                                <li>Level : Pemula</li>
                                <li>Technology : Android</li>
                                <li>Valid until : 11 Juni 2023</li>
                                <li>Notes : Diselenggarakan oleh Dicoding. Materi berisikan pengenalan android studio, intent, activity dll.</li>
                              </ul>
                              <div class="card-body">
                                <iframe frameborder="0" width="100%" height="500" src="dist/doc/sertifikat_course_Belajar Membuat Aplikasi Android untuk Pemula.pdf"></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fab fa-android bg-success"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 7 juni 2020</span>

                          <h3 class="timeline-header"><a class="text-success" data-toggle="collapse" data-parent="#accordion" href="#collapse-6">Memulai Pemrograman Dengan Kotlin <span class="text-muted">(click to see more)</span></a> by Dicoding </h3>
                          <div id="collapse-6" class="panel-collapse collapse in">
                            <div class="timeline-body">
                              <ul>
                                <li>Learning Path : Android Develover</li>
                                <li>Level : Dasar - Pemula</li>
                                <li>Technology : Android | Multi Platform</li>
                                <li>Valid until : 7 Juni 2023</li>
                                <li>Notes : Diselenggarakan oleh Dicoding. Materi berisikan pengenalan kotlin, kotlin fundamental, control flow dll.</li>
                              </ul>
                              <div class="card-body">
                                <iframe frameborder="0" width="100%" height="500" src="dist/doc/sertifikat_course_Memulai Pemrograman Dengan Kotlin.pdf"></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->

                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="seminar">
                    <table class="table" cellpading="3">
                      <tr>
                        <th>Date & Name</th>
                        <th>Points discussed</th>
                      </tr>
                      <tr>
                        <td>8 Apr 2021 <br> Tren Implementasi dan Pengembangan Augmented Reality <i>hosted by</i> Indosat Ooredoo Digital Camp</td>
                        <td>
                          <ul>
                          <li>Apa itu Augmented Reality?</li>
                          <li>Cerita singkat kemunculan Augmented Reality di Indonesia</li>
                          <li>Augmented Reality VS Virtual Reality</li>
                          <li>Implementasi Augmented Reality</li>
                          <li>Tren Augmented Reality saat ini</li>
                          <li>Karir Augmented Reality Developer</li>
                          <li>Prediksi Augmented Reality di masa depan</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>25 Mar 2021 <br> Membangun UI Android Menggunakan Material Design <i>hosted by</i> Indosat Ooredoo Digital Camp</td>
                        <td>
                          <ul>
                          <li>Apa itu Material Design?</li>
                          <li>Kenapa Material Design mempermudah designer dan developer dalam membangun aplikasi Android?</li>
                          <li>Keunggulan menggunakan Material Design</li>
                          <li>Bagaimana menerapkan Material Design pada aplikasi yang akan dibangun?</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>21 Jan 2021 <br> Tren Pengembangan Aplikasi Android di 2021 <i>hosted by</i> Indosat Ooredoo Digital Camp</td>
                        <td>
                          <ul>
                          <li>Mengapa perlu mempelajari Modern Android Development?</li>
                          <li>Apa saja macam-macam skill yang diperlukan di 2021?</li>
                          <li>Bagaimana cara untuk selalu update dengan perkembangan teknologi?</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>19 Jan 2021 <br> Menyimpan Database Secara Local di Aplikasi Androidmu <i>hosted by</i> Dicoding Event</td>
                        <td>
                          <ul>
                          <li>Beragam mekanisme penyimpanan</li>
                          <li>Komponen penyimpanan pada android</li>
                          <li>Kegunaan setiap komponen penyimpanan</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>14 Jan 2021 <br> Membuat Model Machine Learning tanpa Coding <i>hosted by</i> Indosat Ooredoo Digital Camp</td>
                        <td>
                          <ul>
                          <li>Pengenalan Machine Learning</li>
                          <li>Tipe Machine Learning</li>
                          <li>Bagaimana membuat model Machine Learning tanpa coding</li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
<?php
include("footer.php");
?>