<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin.css') }}">

    <title>Data Barang</title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <!-- <a href="#" class="brand">
            <img src="https://scontent.fjog8-1.fna.fbcdn.net/v/t39.30808-6/348868961_1524281224646474_6510309172757669624_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=rtrtcrCtOb4Q7kNvgHtWnos&_nc_ht=scontent.fjog8-1.fna&_nc_gid=Ad-Z6TmaIl9RycO4hoXUqkH&oh=00_AYDojjWSFui8ZR2SaltH2git5SyhO49V1_MTQ-zIA5LtwA&oe=66E97E28" alt="Logo SMAN 1 Sleman" class="logo-smansa">
            <span class="text">SMA N 1 SLEMAN</span>
        </a> -->
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">SMA N 1 SLEMAN</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="{{ url('/admin/dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Beranda</span>
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <i class='bx bxs-package'></i>
                    <span class="text">Data Barang</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admindataruangan') }}">
                    <i class='bx bxs-school'></i>
                    <span class="text">Data Ruangan</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">Data Peminjam</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/adminlaporan') }}">
                    <i class='bx bxs-report'></i>
                    <span class="text">Laporan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/adminpengajuan') }}">
                    <i class='bx bx-clipboard'></i>
                    <span class="text">Pengajuan</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Pengaturan</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Kategori</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Data Barang</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Beranda</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="{{ url('/admindatabarang') }}">Data Barang</a>
                        </li>
                    </ul>
                </div>
                <!-- <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a> -->
            </div>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Tabel Barang</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>kode1</td>
                                <td>
                                    <p>John Doe</p>
                                </td>
                                <td>2021</td>
                                <td>deskripsinih</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>
                                    <!-- Ikon untuk melihat detail, edit, dan hapus -->
                                    <i class='bx bxs-show' style="cursor: pointer; color: #2196f3;"></i>
                                    <i class='bx bxs-pencil' style="cursor: pointer; color: #4caf50;"></i>
                                    <i class='bx bxs-trash' style="cursor: pointer; color: #f44336;"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>kode1</td>
                                <td>
                                    <p>John Doe</p>
                                </td>
                                <td>21</td>
                                <td>deskripsinih</td>
                                <td><span class="status pending">Pending</span></td>
                                <td>
                                    <!-- Ikon untuk melihat detail, edit, dan hapus -->
                                    <i class='bx bxs-show' style="cursor: pointer; color: #2196f3;"></i>
                                    <i class='bx bxs-pencil' style="cursor: pointer; color: #4caf50;"></i>
                                    <i class='bx bxs-trash' style="cursor: pointer; color: #f44336;"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>kode1</td>
                                <td>
                                    <p>John Doe</p>
                                </td>
                                <td>2021</td>
                                <td>deskripsinih</td>
                                <td><span class="status process">Process</span></td>
                                <td>
                                    <!-- Ikon untuk melihat detail, edit, dan hapus -->
                                    <i class='bx bxs-show' style="cursor: pointer; color: #2196f3;"></i>
                                    <i class='bx bxs-pencil' style="cursor: pointer; color: #4caf50;"></i>
                                    <i class='bx bxs-trash' style="cursor: pointer; color: #f44336;"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>kode1</td>
                                <td>
                                    <p>John Doe</p>
                                </td>
                                <td>21</td>
                                <td>deskripsinih</td>
                                <td><span class="status pending">Pending</span></td>
                                <td>
                                    <!-- Ikon untuk melihat detail, edit, dan hapus -->
                                    <i class='bx bxs-show' style="cursor: pointer; color: #2196f3;"></i>
                                    <i class='bx bxs-pencil' style="cursor: pointer; color: #4caf50;"></i>
                                    <i class='bx bxs-trash' style="cursor: pointer; color: #f44336;"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>kode1</td>
                                <td>
                                    <p>John Doe</p>
                                </td>
                                <td>21</td>
                                <td>deskripsinih</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>
                                    <!-- Ikon untuk melihat detail, edit, dan hapus -->
                                    <i class='bx bxs-show' style="cursor: pointer; color: #2196f3;"></i>
                                    <i class='bx bxs-pencil' style="cursor: pointer; color: #4caf50;"></i>
                                    <i class='bx bxs-trash' style="cursor: pointer; color: #f44336;"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main> -->
                <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>