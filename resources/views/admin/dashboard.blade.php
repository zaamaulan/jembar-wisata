@extends('layouts.admin-layout')
@vite('resources/css/style.css')


@section('content')
<div class="box-content bg-[#E7E7E7] w-full h-full">
    <h1 class="ml-28 mt-2 mb-2 text-black text-[32px] font-bold">Dashboard</h1>
    <form action="" method="post" class="bg-white mx-28 my-2 ">
        <!--start baris harga tiket -->
        <div class="grid grid-cols-3">
            <!-- start col-1 -->
            <div class="grid mt-8 ml-20">
                <div class="text-md font-semibold text-black">
                    <h1>Harga Tiket  Masuk</h1>
                
                <div class="border-2 border-dashed rounded border-[#9747FF] p-2 ">
                    <div class="text-xs font-semibold rounded-md p-2 text-white bg-[#6D7280] w-4/5 text-center mt-1 mb-4">
                        <h1>Anak kecil / Rp.25.000</h1>
                    </div>
                    <div class="text-xs font-semibold rounded-md p-2 text-white bg-[#6D7280] w-4/5 text-center mb-1">
                        <h1>Dewasa / Rp.30.000</h1>
                    </div>

                </div></div>

            </div>
            <!-- end col-1 -->

            <!-- start col-2 -->
            <div class="grid mt-8 ml-20">
                <div class="text-md font-semibold text-black">
                    <h1 class="ml-4">Jumlah orang</h1>
                
                <div class="border-2 border-dashed rounded border-[#9747FF] p-2">
                        <input type="text" name="tiketanak" class="bg-[#a7a7a7] text-center text-xs 
                        font-semibold rounded-md p-2  w-full mt-1 mb-4">
                    <br>
                        <input type="text" name="tiketdewasa" class="bg-[#a7a7a7] text-center text-xs 
                        font-semibold rounded-md p-2  w-full mb-1">

                </div></div>

            </div>
            <!-- end col-2 -->
        </div>
        <!-- end baris harga tiket -->
        <!-- start parkir -->
        <div class="grid grid-cols-3">
            <!-- start col-1 -->
            <div class="grid mt-8 ml-20">
                <div class="text-md font-semibold text-black">
                    <h1>Parkir (Opsional)</h1>
                
                    <div class="text-xs font-semibold rounded-md p-2 text-white bg-[#6D7280] w-full h-fit text-start mt-4">
                        <h1>Roda 2 (Rp2.000)</h1>
                    </div>
                    <div class="text-xs font-semibold rounded-md p-2 text-white bg-[#6D7280] w-full h-fit text-start mt-2">
                        <h1>Roda 4 (Rp5.000)</h1>
                    </div>
                    <div class="text-xs font-semibold rounded-md p-2 text-white bg-[#6D7280] w-full h-fit text-start mt-2">
                        <h1>Bus (Rp10.000)</h1>
                    </div></div>
            </div>
            <!-- end col-1 -->

            <!-- start col-2 -->
            <div class="grid mt-8 ml-20">
                <div class="mb-9"></div>
                    <input type="text" name="jumlahr2" class="bg-[#BAC1D3] text-start text-xs font-semibold rounded-md  w-full mb-2 px-5 p-2
                    placeholder-[#595151CC] placeholder-opacity-80 " placeholder ="Jumlah...">                  
                    <input type="text" name="jumlahr4" class="bg-[#BAC1D3] text-start text-xs font-semibold rounded-md  w-full mb-2 px-5 p-2
                    placeholder-[#595151CC] placeholder-opacity-80 " placeholder ="Jumlah...">
                    <input type="text" name="jumlahbus" class="bg-[#BAC1D3] text-start text-xs font-semibold rounded-md  w-full px-5 p-2
                    placeholder-[#595151CC] placeholder-opacity-80 " placeholder ="Jumlah...">

               

            </div>
            <!-- end col-2 -->
        </div>

        <!-- end parkir -->

        <!-- start tiket wahana -->
        <div class="grid grid-cols-4 mt-10 ml-20">
            <div class="text-md  font-semibold text-start">Tiket Wahana</div>
            <div class="text-sm bg-[#6D7280] rounded-md text-white w-40 py-1 text-center">Rp10.000/orang</div>

        </div>

        <div class="grid grid-cols-3">
            <div class="ml-20 mt-8">
                <div class="text-sm font-semibold text-[#332A2AA1] text-opacity-60 px-5 mb-2">Wahana</div>
                <select name="wahana" class="text-xs bg-[#B7CFCF] rounded w-4/5 px-4 mb-4 h-6">
                    <option value="mb">Sewa Mobil-Mobilan</option>
                    <option value="mt">Sewa Motor-Motoran</option>
                    <option value="fx">Flying Fox</option>
                    <option value="krt">Kereta</option>
                    <option value="bll">Bianglala</option>
                </select>
                <div class="text-sm font-semibold text-[#332A2AA1] text-opacity-60  mb-2">Informasi Pengunjung *</div>
                <div class="text-sm font-semibold text-[#3F3C3CD9] mb-2">Kota/Kab</div>
                <input type="text" name="kota" class="bg-[#BAC1D3] text-start text-xs font-semibold rounded-md  w-4/5 h-[25px] px-4">
                <button type="reset" name="reser" class="text-sm text-[#595151] font-bold text-center bg-[#BAC1D3] 
                w-full p-2 mt-12 mb-12">Reset</button>
            </div>

            <div class="ml-20 mt-7">
                <div class="text-sm font-semibold text-[#332A2AA1] text-opacity-60 px-5 mb-2">Jumlah orang</div>
                <input type="text" name="jumlahtiket" class="bg-[#BAC1D3] text-start text-xs font-semibold rounded-md  w-4/5 h-6 px-4 mb-[46px]
                placeholder-[#595151CC] placeholder-opacity-80 " placeholder ="Jumlah">
                <div class="text-sm font-semibold text-[#3F3C3CD9] mb-2">Nomor HP</div>
                <input type="text" name="nohp" class="bg-[#B7CFCF] text-start text-xs font-semibold rounded-md  w-4/5 h-[25px]  px-4">
                <button type="submit" name="submit" class="text-sm text-[#595151] font-bold text-center bg-[#B7CFCF] w-full p-2
                mt-12 mb-12">KIRIM</button>            
            </div>
        </div>
        <!-- end tiket wahana -->

        

        
    </form>

</div>
       
@endsection
