@extends('layouts.master')

@section('scripts')
  <script type="text/javascript">
  $(document).ready(function () {

        $(".my_select_box").chosen({
          no_results_text: "Oops, nothing found!",
          width: "95%"
        });
  });
</script>
@endsection

@section('content')
<div class="container">
  <!-- page content -->
  <div class="right_col" role="main">
      <!-- top tiles -->

      <!-- /top tiles -->

      <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">


                  <div class="clearfix"></div>
              </div>
          </div>

      </div>
      <br />
      <form  action="/kelas/create/submit" method="post">
        {{csrf_field()}}
      <input type="submit" class="btn btn-success" value="Submit">
      <input type="hidden" name='status_terbuka' value='1'  class="form-control" >



      <div class="x_panel">
      <div class="x_content">
          <table class="table table-hover">
              <tbody>
                <tr>
                    <th>Nama Kelas</th>
                    <td><div class="form-group">
                        <input type="text" name='kelas'   class="form-control" >
                      </div>
                    </td>
                </tr>
                <tr>
                    <th>Course </th>
                    <td><div class="form-group" >
                      <select name="id_course" class="my_select_box">
                        @foreach ($course as $data)
                          <option value="{{$data->id}}">{{$data->kodeMK}}-{{$data->namaMK}}-{{$data->sks}}</option>
                        @endforeach

                      </select>
                    </div>
                  </td>
                </tr>
                  <tr>
                      <th>Program Studi</th>
                      <td><div class="form-group" >
                        <select name="id_program_studi" class="my_select_box">
                          @foreach ($program_studi as $data)
                            <option value="{{$data['id']}}">{{$data['program_studi']}}</option>
                          @endforeach

                        </select>
                      </div>
                    </td>
                  </tr>

                  <tr>
                      <th>Term</th>
                      <td><div class="form-group" >
                        <select name="id_term" class="my_select_box">
                          @foreach ($term as $data)
                            <option value="{{$data['id']}}">{{$data['term']}}</option>
                          @endforeach

                        </select>
                      </div>
                    </td>
                  </tr>

                  <tr>
                      <th>Dosen</th>
                      <td><div class="form-group" >
                        <select multiple name="id_dosen[]" class="my_select_box">
                          @foreach ($dosen as $data)
                            <option value="{{$data['id']}}">{{$data['namaDosen']}}</option>
                          @endforeach

                        </select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                      <th>Ruang</th>
                      <td><div class="form-group">
                          <input type="text" name='ruang'   class="form-control" >
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th>Hari</th>
                      <td><div class="form-group">
                          <input type="text" name='hari'   class="form-control" >
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th>Jam</th>
                      <td><div class="form-group">
                          <input type="text" name='jam'   class="form-control" >
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th>Angkatan</th>
                      <td><div class="form-group">
                          <input type="number" name='angkatan'   class="form-control" >
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <th>Jumlah Maksimal</th>
                      <td><div class="form-group">
                          <input type="number" name='max_peserta'   class="form-control" >
                        </div>
                      </td>
                  </tr>
                </form>

              </tbody>
          </table>

      </div>


    </div>
  </div>
</div>
</div>
<!-- /page content -->
</div>

@endsection
