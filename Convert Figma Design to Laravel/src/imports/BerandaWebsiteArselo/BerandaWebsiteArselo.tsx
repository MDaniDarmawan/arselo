import svgPaths from "./svg-91slqcf6xs";
import imgWeAreArselo1 from "./3d58584c6378df7e74ef054ff3e4ca22652327d6.png";
import imgLogoSmpn10Jember from "./538f6404c7ec93bc8d08397909c29c2633c946a8.png";
import imgBuSusy11 from "./fdabb7cf46a98757f64c68e7b711a0466fe72230.png";
import imgImage33 from "./49a03feb9f29b7030dc0d423b875c44a4ed4f7f2.png";
import imgImage30 from "./1e5953861398dfadf5cb41a7c3f5ec753b4032e4.png";
import imgImage31 from "./aea08a389bd948f81d18dc16480a68849b82dc2b.png";
import imgImage32 from "./5a20014c70cdd7fa6d4fa6f0042d570d219f6c52.png";
import imgFrame6635 from "./3fb5d1832c7b8a1272285e816afcff6f260958d4.png";
import imgFrame6636 from "./6b24d33fba61a5345f1f09c5dc2e5fcb2a762d34.png";
import imgLogoSmpn10Jember1 from "./af1540ececc261ca0204556ba2f02271fa233a03.png";

function Menu() {
  return (
    <div className="content-stretch flex gap-[24px] items-center justify-end leading-[25.2px] relative shrink-0 text-[18px] whitespace-nowrap" data-name="Menu">
      <p className="font-['Montserrat:Bold',sans-serif] font-bold relative shrink-0 text-[#408fd9]">Beranda</p>
      <p className="font-['Montserrat:Regular',sans-serif] font-normal relative shrink-0 text-[#092c4c]">Tentang Kami</p>
      <p className="font-['Montserrat:Regular',sans-serif] font-normal relative shrink-0 text-[#092c4c]">Akademik</p>
      <p className="font-['Montserrat:Regular',sans-serif] font-normal relative shrink-0 text-[#092c4c]">Kesiswaan</p>
      <p className="font-['Montserrat:Regular',sans-serif] font-normal relative shrink-0 text-[#092c4c]">Galeri</p>
      <p className="font-['Montserrat:Regular',sans-serif] font-normal relative shrink-0 text-[#092c4c]">Kontak</p>
    </div>
  );
}

function Navbar() {
  return (
    <div className="relative shrink-0 w-full" data-name="Navbar">
      <div className="flex flex-row items-center justify-center size-full">
        <div className="content-stretch flex items-center justify-between px-[100px] py-[30px] relative size-full">
          <div className="h-[53px] relative shrink-0 w-[153px]" data-name="WE ARE ARSELO 1">
            <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgWeAreArselo1} />
          </div>
          <Menu />
        </div>
      </div>
    </div>
  );
}

function Judul() {
  return (
    <div className="content-stretch flex items-start relative shrink-0 w-full" data-name="Judul">
      <div className="font-['Montserrat:Bold',sans-serif] font-bold leading-[0] relative shrink-0 text-[60px] text-black whitespace-nowrap">
        <p className="leading-[61.6px] mb-[28px] text-[#092c4c]">Selamat Datang</p>
        <p className="leading-[61.6px] mb-[28px] text-[#092c4c]">di Website</p>
        <p className="leading-[61.6px] text-[#408fd9]">SMPN 10 Jember</p>
      </div>
    </div>
  );
}

function Frame10() {
  return (
    <div className="content-stretch flex flex-col gap-[50px] items-start justify-center relative shrink-0 w-[524px]">
      <Judul />
      <div className="bg-[#408fd9] content-center flex flex-wrap gap-y-[10px] h-[53px] items-center justify-center px-[20px] py-[15px] relative rounded-[10px] shrink-0" data-name="Button">
        <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[22.4px] relative shrink-0 text-[16px] text-white whitespace-nowrap">Selengkapnya</p>
      </div>
    </div>
  );
}

function BackgroundHero() {
  return (
    <div className="content-stretch flex gap-[150px] items-center justify-center px-[30px] relative rounded-[30px] shrink-0" style={{ backgroundImage: "linear-gradient(59.9526deg, rgba(64, 143, 217, 0.1) 0%, rgba(255, 255, 255, 0) 24.992%)" }} data-name="Background Hero">
      <Frame10 />
      <div className="h-[500px] relative shrink-0 w-[483px]" data-name="Logo SMPN 10 Jember">
        <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgLogoSmpn10Jember} />
      </div>
    </div>
  );
}

function HeroSection() {
  return (
    <div className="content-stretch flex items-center justify-center py-[30px] relative rounded-[30px] shrink-0 w-full" data-name="Hero Section">
      <BackgroundHero />
    </div>
  );
}

function FotoKepalaSekolah() {
  return (
    <div className="h-[468px] overflow-clip relative rounded-[20px] shrink-0 w-[415px]" data-name="Foto Kepala Sekolah">
      <div className="absolute bg-[#408fd9] h-[220px] left-[-1px] rounded-[20px] top-[213px] w-[416px]" />
      <div className="-translate-x-1/2 absolute bottom-0 h-[469px] left-[calc(50%+0.5px)] w-[416px]" data-name="bu susy 1 1">
        <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgBuSusy11} />
      </div>
    </div>
  );
}

function Sambutan() {
  return (
    <div className="content-stretch flex flex-[1_0_0] flex-col gap-[30px] items-start justify-center min-w-px relative" data-name="Sambutan">
      <div className="bg-[#408fd9] h-[7px] relative shrink-0 w-[94px]" data-name="Line" />
      <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[normal] min-w-full relative shrink-0 text-[#408fd9] text-[44px] w-[min-content]">Sambutan Kepala Sekolah</p>
      <div className="font-['Montserrat:Regular',sans-serif] font-normal leading-[0] min-w-full relative shrink-0 text-[#737373] text-[0px] w-[min-content] whitespace-pre-wrap">
        <p className="leading-[25.2px] mb-0 text-[18px]">{`Assalamu'alaikum Warahmatullahi Wabarokatuh`}</p>
        <p className="leading-[25.2px] mb-0 text-[18px]">​</p>
        <p className="leading-[25.2px] mb-0 text-[18px]">Selamat datang di website resmi SMP Negeri 10 Jember. Website ini hadir sebagai jendela informasi lengkap tentang profil sekolah, prestasi, fasilitas, kegiatan ekstrakurikuler, dan program unggulan kami.</p>
        <p className="leading-[25.2px] mb-0 text-[18px]">
          <br aria-hidden="true" />
          Terima kasih atas kunjungan dan kepercayaan Anda. Semoga informasi yang kami sajikan bermanfaat.
        </p>
        <p className="leading-[25.2px] mb-0 text-[18px]">​</p>
        <p className="leading-[25.2px] mb-0 text-[18px]">{`Wassalamu'alaikum Warahmatullahi Wabarokatuh.`}</p>
        <p className="leading-[25.2px] mb-0 text-[18px]">​</p>
        <p className="leading-[25.2px] mb-0 text-[18px]">Kepala Sekolah SMPN 10 Jember</p>
        <p className="leading-[25.2px] text-[18px]">Susy</p>
      </div>
    </div>
  );
}

function SambutanKepalaSekolah() {
  return (
    <div className="bg-white relative shrink-0 w-full" data-name="Sambutan Kepala Sekolah">
      <div className="flex flex-row items-center justify-center size-full">
        <div className="content-stretch flex gap-[100px] items-center justify-center px-[100px] py-[30px] relative size-full">
          <FotoKepalaSekolah />
          <Sambutan />
        </div>
      </div>
    </div>
  );
}

function Frame() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0">
      <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[26.4px] relative shrink-0 text-[#092c4c] text-[28px] whitespace-nowrap">Artikel</p>
    </div>
  );
}

function Frame1() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] relative shrink-0 text-[#092c4c] text-[20px] text-right whitespace-nowrap">Lihat Selengkapnya...</p>
    </div>
  );
}

function Frame19() {
  return (
    <div className="relative shrink-0 w-full">
      <div className="flex flex-row items-center justify-center size-full">
        <div className="content-stretch flex items-center justify-between px-[100px] py-[30px] relative size-full">
          <Frame />
          <Frame1 />
        </div>
      </div>
    </div>
  );
}

function Frame50() {
  return (
    <div className="content-stretch flex font-['Montserrat:Regular',sans-serif] font-normal items-start justify-between leading-[19.6px] relative shrink-0 text-[#408fd9] text-[14px] w-full">
      <p className="mr-[-23px] relative shrink-0 w-[308px]">10 November 2025</p>
      <p className="relative shrink-0 text-right whitespace-nowrap">{`>>>`}</p>
    </div>
  );
}

function Frame12() {
  return (
    <div className="content-stretch flex flex-col gap-[10px] items-start p-[20px] relative shrink-0 w-[350px]">
      <Frame50 />
      <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[25.2px] relative shrink-0 text-[#092c4c] text-[18px] w-[308px]">Peringati Hari Pahlawan dengan Upacara Khidmat</p>
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[22.4px] min-w-full relative shrink-0 text-[#737373] text-[16px] w-[min-content]">SMP Negeri 10 Jember melaksanakan upacara bendera dalam rangka memperingati Hari Pahlawan. Upaca...</p>
    </div>
  );
}

function Frame11() {
  return (
    <div className="bg-white col-1 content-stretch drop-shadow-[0px_13px_9.5px_rgba(0,0,0,0.07)] flex items-start justify-center justify-self-start relative row-1 self-start shrink-0">
      <div className="relative shrink-0 size-[200px]" data-name="image 33">
        <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgImage33} />
      </div>
      <Frame12 />
    </div>
  );
}

function Frame52() {
  return (
    <div className="content-stretch flex font-['Montserrat:Regular',sans-serif] font-normal items-start justify-between leading-[19.6px] relative shrink-0 text-[#408fd9] text-[14px] w-full">
      <p className="mr-[-23px] relative shrink-0 w-[308px]">10 November 2025</p>
      <p className="relative shrink-0 text-right whitespace-nowrap">{`>>>`}</p>
    </div>
  );
}

function Frame14() {
  return (
    <div className="content-stretch flex flex-col gap-[10px] items-start p-[20px] relative shrink-0 w-[350px]">
      <Frame52 />
      <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[25.2px] relative shrink-0 text-[#092c4c] text-[18px] w-[308px]">Peringati Hari Pahlawan dengan Upacara Khidmat</p>
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[22.4px] min-w-full relative shrink-0 text-[#737373] text-[16px] w-[min-content]">SMP Negeri 10 Jember melaksanakan upacara bendera dalam rangka memperingati Hari Pahlawan. Upaca...</p>
    </div>
  );
}

function Frame13() {
  return (
    <div className="bg-white col-2 content-stretch drop-shadow-[0px_13px_9.5px_rgba(0,0,0,0.07)] flex items-start justify-center justify-self-start relative row-1 self-start shrink-0">
      <div className="relative shrink-0 size-[200px]" data-name="image 33">
        <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgImage33} />
      </div>
      <Frame14 />
    </div>
  );
}

function Frame53() {
  return (
    <div className="content-stretch flex font-['Montserrat:Regular',sans-serif] font-normal items-start justify-between leading-[19.6px] relative shrink-0 text-[#408fd9] text-[14px] w-full">
      <p className="mr-[-23px] relative shrink-0 w-[308px]">10 November 2025</p>
      <p className="relative shrink-0 text-right whitespace-nowrap">{`>>>`}</p>
    </div>
  );
}

function Frame16() {
  return (
    <div className="content-stretch flex flex-col gap-[10px] items-start p-[20px] relative shrink-0 w-[350px]">
      <Frame53 />
      <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[25.2px] relative shrink-0 text-[#092c4c] text-[18px] w-[308px]">Peringati Hari Pahlawan dengan Upacara Khidmat</p>
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[22.4px] min-w-full relative shrink-0 text-[#737373] text-[16px] w-[min-content]">SMP Negeri 10 Jember melaksanakan upacara bendera dalam rangka memperingati Hari Pahlawan. Upaca...</p>
    </div>
  );
}

function Frame15() {
  return (
    <div className="bg-white col-1 content-stretch drop-shadow-[0px_13px_9.5px_rgba(0,0,0,0.07)] flex items-start justify-center justify-self-start relative row-2 self-start shrink-0">
      <div className="relative shrink-0 size-[200px]" data-name="image 33">
        <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgImage33} />
      </div>
      <Frame16 />
    </div>
  );
}

function Frame54() {
  return (
    <div className="content-stretch flex font-['Montserrat:Regular',sans-serif] font-normal items-start justify-between leading-[19.6px] relative shrink-0 text-[#408fd9] text-[14px] w-full">
      <p className="mr-[-23px] relative shrink-0 w-[308px]">10 November 2025</p>
      <p className="relative shrink-0 text-right whitespace-nowrap">{`>>>`}</p>
    </div>
  );
}

function Frame18() {
  return (
    <div className="content-stretch flex flex-col gap-[10px] items-start p-[20px] relative shrink-0 w-[350px]">
      <Frame54 />
      <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[25.2px] relative shrink-0 text-[#092c4c] text-[18px] w-[308px]">Peringati Hari Pahlawan dengan Upacara Khidmat</p>
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[22.4px] min-w-full relative shrink-0 text-[#737373] text-[16px] w-[min-content]">SMP Negeri 10 Jember melaksanakan upacara bendera dalam rangka memperingati Hari Pahlawan. Upaca...</p>
    </div>
  );
}

function Frame17() {
  return (
    <div className="bg-white col-2 content-stretch drop-shadow-[0px_13px_9.5px_rgba(0,0,0,0.07)] flex items-start justify-center justify-self-start relative row-2 self-start shrink-0">
      <div className="relative shrink-0 size-[200px]" data-name="image 33">
        <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgImage33} />
      </div>
      <Frame18 />
    </div>
  );
}

function Frame55() {
  return (
    <div className="content-stretch flex font-['Montserrat:Regular',sans-serif] font-normal items-start justify-between leading-[19.6px] relative shrink-0 text-[#408fd9] text-[14px] w-full">
      <p className="mr-[-23px] relative shrink-0 w-[308px]">10 November 2025</p>
      <p className="relative shrink-0 text-right whitespace-nowrap">{`>>>`}</p>
    </div>
  );
}

function Frame21() {
  return (
    <div className="content-stretch flex flex-col gap-[10px] items-start p-[20px] relative shrink-0 w-[350px]">
      <Frame55 />
      <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[25.2px] relative shrink-0 text-[#092c4c] text-[18px] w-[308px]">Peringati Hari Pahlawan dengan Upacara Khidmat</p>
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[22.4px] min-w-full relative shrink-0 text-[#737373] text-[16px] w-[min-content]">SMP Negeri 10 Jember melaksanakan upacara bendera dalam rangka memperingati Hari Pahlawan. Upaca...</p>
    </div>
  );
}

function Frame20() {
  return (
    <div className="bg-white col-1 content-stretch drop-shadow-[0px_13px_9.5px_rgba(0,0,0,0.07)] flex items-start justify-center justify-self-start relative row-3 self-start shrink-0">
      <div className="relative shrink-0 size-[200px]" data-name="image 33">
        <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgImage33} />
      </div>
      <Frame21 />
    </div>
  );
}

function Frame56() {
  return (
    <div className="content-stretch flex font-['Montserrat:Regular',sans-serif] font-normal items-start justify-between leading-[19.6px] relative shrink-0 text-[#408fd9] text-[14px] w-full">
      <p className="mr-[-23px] relative shrink-0 w-[308px]">10 November 2025</p>
      <p className="relative shrink-0 text-right whitespace-nowrap">{`>>>`}</p>
    </div>
  );
}

function Frame23() {
  return (
    <div className="content-stretch flex flex-col gap-[10px] items-start p-[20px] relative shrink-0 w-[350px]">
      <Frame56 />
      <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[25.2px] relative shrink-0 text-[#092c4c] text-[18px] w-[308px]">Peringati Hari Pahlawan dengan Upacara Khidmat</p>
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[22.4px] min-w-full relative shrink-0 text-[#737373] text-[16px] w-[min-content]">SMP Negeri 10 Jember melaksanakan upacara bendera dalam rangka memperingati Hari Pahlawan. Upaca...</p>
    </div>
  );
}

function Frame22() {
  return (
    <div className="bg-white col-2 content-stretch drop-shadow-[0px_13px_9.5px_rgba(0,0,0,0.07)] flex items-start justify-center justify-self-start relative row-3 self-start shrink-0">
      <div className="relative shrink-0 size-[200px]" data-name="image 33">
        <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgImage33} />
      </div>
      <Frame23 />
    </div>
  );
}

function Frame51() {
  return (
    <div className="gap-x-[40px] gap-y-[40px] grid-cols-[repeat(2,fit-content(100%))] grid-rows-[repeat(3,fit-content(100%))] inline-grid pb-[30px] relative shrink-0">
      <Frame11 />
      <Frame13 />
      <Frame15 />
      <Frame17 />
      <Frame20 />
      <Frame22 />
    </div>
  );
}

function Frame3() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0">
      <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[26.4px] relative shrink-0 text-[#092c4c] text-[28px] whitespace-nowrap">Prestasi Siswa</p>
    </div>
  );
}

function Frame4() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] relative shrink-0 text-[#092c4c] text-[20px] text-right whitespace-nowrap">Lihat Selengkapnya...</p>
    </div>
  );
}

function Frame2() {
  return (
    <div className="relative shrink-0 w-full">
      <div className="flex flex-row items-center justify-center size-full">
        <div className="content-stretch flex items-center justify-between px-[100px] relative size-full">
          <Frame3 />
          <Frame4 />
        </div>
      </div>
    </div>
  );
}

function Frame27() {
  return (
    <div className="relative shrink-0 w-full">
      <div className="content-stretch flex flex-col gap-[10px] items-start p-[20px] relative size-full">
        <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[19.6px] relative shrink-0 text-[#408fd9] text-[14px] w-[308px]">16 Februari 2026</p>
        <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[25.2px] relative shrink-0 text-[#092c4c] text-[18px] w-[308px]">Juara 1 Lomba Fashion Tingkat Kabupaten</p>
        <div className="font-['Montserrat:Regular',sans-serif] font-normal leading-[0] relative shrink-0 text-[#737373] text-[18px] whitespace-nowrap">
          <p className="leading-[25.2px] mb-0">Muyasaro</p>
          <p className="leading-[25.2px]">9A</p>
        </div>
      </div>
    </div>
  );
}

function Frame26() {
  return (
    <div className="bg-white content-stretch drop-shadow-[0px_13px_9.5px_rgba(0,0,0,0.07)] flex flex-col items-start relative shrink-0 w-[348px]">
      <div className="aspect-[915/914] relative shrink-0 w-full" data-name="image 30">
        <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgImage30} />
      </div>
      <Frame27 />
    </div>
  );
}

function Frame29() {
  return (
    <div className="relative shrink-0 w-full">
      <div className="content-stretch flex flex-col gap-[10px] items-start p-[20px] relative size-full">
        <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[19.6px] relative shrink-0 text-[#408fd9] text-[14px] w-[308px]">16 Februari 2026</p>
        <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[25.2px] relative shrink-0 text-[#092c4c] text-[18px] w-[308px]">Juara 2 English Speech Mosaic 2026</p>
        <div className="font-['Montserrat:Regular',sans-serif] font-normal leading-[0] min-w-full relative shrink-0 text-[#737373] text-[18px] w-[min-content]">
          <p className="leading-[25.2px] mb-0">Kamilka Fahrizal A.</p>
          <p className="leading-[25.2px]">9A</p>
        </div>
      </div>
    </div>
  );
}

function Frame28() {
  return (
    <div className="bg-white content-stretch drop-shadow-[0px_13px_9.5px_rgba(0,0,0,0.07)] flex flex-col items-start relative shrink-0 w-[348px]">
      <div className="h-[347.62px] relative shrink-0 w-[347.24px]" data-name="image 31">
        <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgImage31} />
      </div>
      <Frame29 />
    </div>
  );
}

function Frame31() {
  return (
    <div className="relative shrink-0 w-full">
      <div className="content-stretch flex flex-col gap-[10px] items-start p-[20px] relative size-full">
        <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[19.6px] relative shrink-0 text-[#408fd9] text-[14px] w-[308px]">16 Februari 2026</p>
        <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[25.2px] relative shrink-0 text-[#092c4c] text-[18px] w-[308px]">Peraih Medali Perak Matematika Nasional</p>
        <div className="font-['Montserrat:Regular',sans-serif] font-normal leading-[0] relative shrink-0 text-[#737373] text-[18px] whitespace-nowrap">
          <p className="leading-[25.2px] mb-0">Muyasaro</p>
          <p className="leading-[25.2px]">9A</p>
        </div>
      </div>
    </div>
  );
}

function Frame30() {
  return (
    <div className="bg-white content-stretch drop-shadow-[0px_13px_9.5px_rgba(0,0,0,0.07)] flex flex-col items-start relative shrink-0 w-[348px]">
      <div className="h-[347.62px] relative shrink-0 w-[348.001px]" data-name="image 32">
        <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgImage32} />
      </div>
      <Frame31 />
    </div>
  );
}

function Frame25() {
  return (
    <div className="content-stretch flex gap-[30px] items-start justify-center relative shrink-0 w-full">
      <Frame26 />
      <Frame28 />
      <Frame30 />
    </div>
  );
}

function Frame24() {
  return (
    <div className="bg-[#e4ffff] content-stretch flex flex-col gap-[50px] items-center py-[100px] relative shrink-0 w-full">
      <Frame2 />
      <Frame25 />
    </div>
  );
}

function Frame6() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0">
      <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[26.4px] relative shrink-0 text-[#092c4c] text-[28px] whitespace-nowrap">Ekstrakurikuler</p>
    </div>
  );
}

function Frame7() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] relative shrink-0 text-[#092c4c] text-[20px] text-right whitespace-nowrap">Lihat Selengkapnya...</p>
    </div>
  );
}

function Frame5() {
  return (
    <div className="relative shrink-0 w-full">
      <div className="flex flex-row items-center justify-center size-full">
        <div className="content-stretch flex items-center justify-between px-[100px] py-[30px] relative size-full">
          <Frame6 />
          <Frame7 />
        </div>
      </div>
    </div>
  );
}

function Frame33() {
  return (
    <div className="flex-[1_0_0] h-[453px] min-w-px relative">
      <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgFrame6635} />
      <div className="flex flex-row items-center justify-center size-full">
        <div className="content-stretch flex items-center justify-center px-[10px] relative size-full">
          <div className="flex flex-[1_0_0] flex-col font-['Montserrat:Bold',sans-serif] font-bold h-full justify-center leading-[0] min-w-px relative text-[28px] text-center text-white">
            <p className="leading-[26.4px]">Sepak Bola dan Futsal</p>
          </div>
        </div>
      </div>
    </div>
  );
}

function Frame32() {
  return (
    <div className="relative shrink-0 w-full">
      <div className="flex flex-row justify-center size-full">
        <div className="content-stretch flex items-start justify-center px-[100px] py-[10px] relative size-full">
          <Frame33 />
        </div>
      </div>
    </div>
  );
}

function Frame8() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0">
      <p className="font-['Montserrat:Bold',sans-serif] font-bold leading-[26.4px] relative shrink-0 text-[#092c4c] text-[28px] whitespace-nowrap">Fasilitas Sekolah</p>
    </div>
  );
}

function Frame9() {
  return (
    <div className="content-stretch flex items-center justify-center relative shrink-0">
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[28px] relative shrink-0 text-[#092c4c] text-[20px] text-right whitespace-nowrap">Lihat Selengkapnya...</p>
    </div>
  );
}

function Frame34() {
  return (
    <div className="relative shrink-0 w-full">
      <div className="flex flex-row items-center justify-center size-full">
        <div className="content-stretch flex items-center justify-between px-[100px] py-[30px] relative size-full">
          <Frame8 />
          <Frame9 />
        </div>
      </div>
    </div>
  );
}

function Frame35() {
  return (
    <div className="flex-[1_0_0] h-[453px] min-w-px relative">
      <img alt="" className="absolute inset-0 max-w-none object-cover pointer-events-none size-full" src={imgFrame6636} />
      <div className="flex flex-row items-center justify-center size-full">
        <div className="content-stretch flex items-center justify-center px-[10px] relative size-full">
          <div className="flex flex-[1_0_0] flex-col font-['Montserrat:Bold',sans-serif] font-bold h-full justify-center leading-[0] min-w-px relative text-[28px] text-center text-white">
            <p className="leading-[26.4px]">Lapangan Basket</p>
          </div>
        </div>
      </div>
    </div>
  );
}

function Frame57() {
  return (
    <div className="relative shrink-0 w-full">
      <div className="flex flex-row justify-center size-full">
        <div className="content-stretch flex items-start justify-center px-[100px] py-[10px] relative size-full">
          <Frame35 />
        </div>
      </div>
    </div>
  );
}

function Frame48() {
  return (
    <div className="content-stretch flex gap-[9px] items-center relative shrink-0 w-full">
      <div className="h-[75px] relative shrink-0 w-[72px]" data-name="Logo SMPN 10 Jember">
        <div className="absolute inset-0 overflow-hidden pointer-events-none">
          <img alt="" className="absolute h-[105.44%] left-[-3%] max-w-none top-[-2.72%] w-[106%]" src={imgLogoSmpn10Jember1} />
        </div>
      </div>
      <div className="font-['Montserrat:Bold',sans-serif] font-bold leading-[0] relative shrink-0 text-[#408fd9] text-[28px] whitespace-nowrap">
        <p className="leading-[26.4px] mb-0">#ArseloJaya</p>
        <p className="leading-[26.4px]">#ArseloBisa</p>
      </div>
    </div>
  );
}

function Frame47() {
  return (
    <div className="content-stretch flex flex-col gap-[30px] h-[197px] items-start relative shrink-0 w-[265px]">
      <Frame48 />
      <p className="flex-[1_0_0] font-['Montserrat:Regular',sans-serif] font-normal leading-[25.2px] min-h-px relative text-[#737373] text-[18px] w-full">Jl. Nusa Indah No.25, Tegal Rejo, Jemberlor, Kec. Patrang, Kabupaten Jember, Jawa Timur 68118</p>
    </div>
  );
}

function Frame38() {
  return (
    <div className="content-stretch flex items-center relative shrink-0 w-full">
      <div className="flex-[1_0_0] font-['Montserrat:Regular',sans-serif] font-normal leading-[0] min-w-px relative text-[#737373] text-[18px]">
        <p className="leading-[25.2px] mb-0">Beranda</p>
        <p className="leading-[25.2px] mb-0">Tentang Kami</p>
        <p className="leading-[25.2px] mb-0">Akademik</p>
        <p className="leading-[25.2px] mb-0">Kesiswaan</p>
        <p className="leading-[25.2px] mb-0">Galeri</p>
        <p className="leading-[25.2px]">Kontak</p>
      </div>
    </div>
  );
}

function Frame40() {
  return (
    <div className="content-stretch flex flex-col gap-[10px] items-start relative shrink-0 w-[300px]">
      <div className="flex flex-col font-['Montserrat:Bold',sans-serif] font-bold justify-center leading-[0] relative shrink-0 text-[20px] text-black w-full">
        <p className="leading-[28px]">Menu</p>
      </div>
      <Frame38 />
    </div>
  );
}

function Frame37() {
  return (
    <div className="relative shrink-0 size-[25px]">
      <svg className="absolute block inset-0 size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 25 25">
        <g id="Frame 6680">
          <rect height="24" rx="4.5" stroke="var(--stroke-0, #737373)" width="24" x="0.5" y="0.5" />
          <path d={svgPaths.p31c0200} fill="var(--fill-0, #737373)" id="Vector" />
        </g>
      </svg>
    </div>
  );
}

function Frame41() {
  return (
    <div className="content-stretch flex gap-[10px] items-center relative shrink-0 w-full">
      <Frame37 />
      <a className="block font-['Montserrat:Regular',sans-serif] font-normal leading-[0] relative shrink-0 text-[#737373] text-[18px] whitespace-nowrap" href="https://www.google.com/search?q=smpn+10+jember&oq=smpn+10+jember&gs_lcrp=EgZjaHJvbWUqDwgAECMYJxjjAhiABBiKBTIPCAAQIxgnGOMCGIAEGIoFMhIIARAuGCcYrwEYxwEYgAQYigUyCAgCEAAYFhgeMggIAxAAGBYYHjIICAQQABgWGB4yBggFEEUYPDIGCAYQRRg8MgYIBxBFGDzSAQgyNDY2ajBqNKgCALACAQ&sourceid=chrome&ie=UTF-8#" target="_blank">
        <p className="cursor-pointer leading-[25.2px]">(0331) 485223</p>
      </a>
    </div>
  );
}

function Frame39() {
  return (
    <div className="content-stretch flex flex-col gap-[10px] items-start relative shrink-0 w-full">
      <div className="flex flex-col font-['Montserrat:Bold',sans-serif] font-bold justify-center leading-[0] relative shrink-0 text-[20px] text-black w-full">
        <p className="leading-[28px]">Telepon</p>
      </div>
      <Frame41 />
    </div>
  );
}

function Frame36() {
  return (
    <div className="relative shrink-0 size-[25px]">
      <svg className="absolute block inset-0 size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 25 25">
        <g id="Frame 6679">
          <rect height="24" rx="4.5" stroke="var(--stroke-0, #737373)" width="24" x="0.5" y="0.5" />
          <g id="Vector">
            <path d={svgPaths.p223fab20} fill="#737373" />
            <path d={svgPaths.p3b999680} fill="#737373" />
            <path d={svgPaths.p1eb2d00} fill="#737373" />
          </g>
        </g>
      </svg>
    </div>
  );
}

function Frame45() {
  return (
    <div className="content-stretch flex gap-[10px] items-center relative shrink-0 w-full">
      <Frame36 />
      <p className="font-['Montserrat:Regular',sans-serif] font-normal leading-[25.2px] relative shrink-0 text-[#737373] text-[18px] whitespace-nowrap">@arselo_official</p>
    </div>
  );
}

function Frame42() {
  return (
    <div className="content-stretch flex flex-col gap-[10px] items-start relative shrink-0 w-full">
      <div className="flex flex-col font-['Montserrat:Bold',sans-serif] font-bold justify-center leading-[0] relative shrink-0 text-[20px] text-black w-full">
        <p className="leading-[28px]">Media Sosial</p>
      </div>
      <Frame45 />
    </div>
  );
}

function Frame43() {
  return (
    <div className="content-stretch flex flex-col gap-[40px] items-start relative shrink-0 w-[300px]">
      <Frame39 />
      <Frame42 />
    </div>
  );
}

function Frame44() {
  return (
    <div className="content-stretch flex items-start relative shrink-0">
      <Frame43 />
    </div>
  );
}

function Frame49() {
  return (
    <div className="content-stretch flex gap-[30px] items-start relative shrink-0">
      <Frame40 />
      <Frame44 />
    </div>
  );
}

function Frame46() {
  return (
    <div className="bg-[#f9f9f9] content-stretch flex gap-[150px] items-center justify-center p-[100px] relative shrink-0 w-[1440px]">
      <Frame47 />
      <div className="h-[186px] relative shrink-0 w-0">
        <div className="absolute inset-[0_-0.5px]">
          <svg className="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 1 186">
            <path d="M0.5 0V186" id="Vector 47" stroke="var(--stroke-0, #737373)" />
          </svg>
        </div>
      </div>
      <Frame49 />
    </div>
  );
}

export default function BerandaWebsiteArselo() {
  return (
    <div className="bg-white content-stretch flex flex-col gap-[10px] items-center relative size-full" data-name="Beranda - Website Arselo">
      <Navbar />
      <HeroSection />
      <SambutanKepalaSekolah />
      <Frame19 />
      <Frame51 />
      <Frame24 />
      <Frame5 />
      <Frame32 />
      <Frame34 />
      <Frame57 />
      <Frame46 />
    </div>
  );
}