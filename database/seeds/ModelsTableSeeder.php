<?php

use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new \App\Girl();
        $model->name = 'Soda';
        $model->date_of_birth = '21/10/1988';
        $model->height = 1.68;
        $model->national = 'Korea';
        $model->description = 'SODA được biết đến là một DJ với vẻ ngoài nóng bỏng không thua kém bất cứ mỹ nhân nào.Cô thường thể hiện những điệu nhảy quyến rũ trong màn trình diễn của mình, khoe nét đẹp gợi cảm.Các hoạt động của DJ SODA luôn được người hâm mộ săn đón, tài khoản mạng xã hội như Youtube và Instagram của cô hiện có hơn 4 triệu lượt theo dõi.Fan Việt biết đến cô qua các bản remix Talk Dirty (Jason Derulo), New Thang (Red Foo)...';
        $model->job = 'Người mẫu';
        $model->image = 'soda.jpg';
        $model->save();

        $model = new \App\Girl();
        $model->name = 'Ngọc Trinh';
        $model->date_of_birth = '12/09/1989';
        $model->height = 1.72;
        $model->national = 'Việt Nam';
        $model->description = 'Nữ hoàng nội y Ngọc Trinh tên thật là Trịnh Ngọc Trinh . Sinh ngày 27 tháng 09 năm 1989 tại thị trấn Tiểu Cầu - tỉnh Trà vinh trong một gia đình nghèo. Cô sở hữu chiều cao 1m72 cùng với số đo cực chuẩn 85 - 58 - 91, Ngọc Trinh nhanh chóng gia nhập làng thời trang Việt năm 15 tuồi, 16 tuổi tham gia và giành giải phụ cuộc thi " Hoa Hậu Trang Sức " . Năm 2005, Ngọc Trinh tham dự Siêu Mẫu Việt Nam và đoạt giải " Người Đẹp Ăn Ảnh " .';
        $model->job = 'Người mẫu';
        $model->image = 'ngoctrinh.jpeg';
        $model->save();

        $model = new \App\Girl();
        $model->name = 'Lưu Diệc Phi';
        $model->date_of_birth = '25//08/1987';
        $model->height = 1.70;
        $model->national = 'Trung Quốc';
        $model->description = 'Lưu Diệc Phi, tên khai sinh là An Phong, là nữ diễn viên người Trung Quốc được biết đến với vai Vương Ngữ Yên trong "Tân Thiên Long Bát Bộ" và vai Tiểu Long Nữ trong "Thần Điêu Đại Hiệp". Năm 2008, cô trở thành nữ diễn viên Trung Quốc thứ hai sau Chương Tử Di kí hợp đồng độc quyền với công ty giải trí William Morris Agency, 1 trong 3 công ty giải trí lớn nhất nước Mĩ. Lưu Diệc Phi còn được mệnh danh là một trong Tứ tiểu hoa đán mới của Trung Quốc.';
        $model->job = 'Người mẫu';
        $model->image = 'luudiecphi.jpeg';
        $model->save();
    }
}
