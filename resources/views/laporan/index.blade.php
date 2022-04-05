<div class="row">
                    <table class="table table-hover">
                        <tr>
                            <th>Nama Pelanggan</th>
                            <th>Nama Menu</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Nama Pegawai</th>
                            <th>Tanggal</th>
                        </tr>
                        @foreach($data as $u)
                        <tr>
                        <td>{{$u->nama_pelanggan}}</td>
                        <td>{{$u->nama_menu}}</td>
                        <td>{{$u->jumlah}}</td>
                        <td>{{$u->total_harga}}</td>
                        <td>{{$u->nama_pegawai}}</td>
                        <td>
                            {{$u->tanggal}}
                            <!-- <a href="createkasir" class="btn btn-warning">Pesan</a> -->
                        </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>