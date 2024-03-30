## README.md

**Jokee - Single Serving Joke Website**

**Mô tả dự án**

Đây là dự án bài test đánh giá năng lực lập trình Laravel và các công nghệ frontend cơ bản. Chức năng cốt lõi là website hiển thị các câu chuyện cười và cho phép người dùng bình chọn ("thích" hoặc "không thích").

**Tính năng chính**

* Hiển thị từng câu chuyện cười một.
* Cho phép người dùng bình chọn cho các câu chuyện cười (thích/không thích).
* Lưu trữ bình chọn bằng cơ sở dữ liệu.
* Ngăn người dùng xem cùng một câu chuyện cười hai lần (bằng cookie).
* Hiển thị thông báo "Hết chuyện cười..." khi không còn câu chuyện cười nào.

**Triển khai kỹ thuật**

* **Backend:**
    * Laravel (PHP)
    * Cơ sở dữ liệu MySQL để lưu trữ câu chuyện cười và bình chọn
    * Cơ chế dựa trên cookie để ngăn hiển thị câu chuyện cười trùng lặp
* **Frontend:**
    * Cấu trúc HTML cơ bản
    * CSS để tạo kiểu
    * JavaScript tối thiểu để gửi bình chọn (AJAX hoặc submit form)

**Hướng dẫn cài đặt**

1. **Clone kho lưu trữ:**
    ```bash
    git clone https://github.com/tientvtdc/zens-assignment-truong-van-tien
    ```
2. **Cài đặt gói phụ thuộc:**
    ```bash
    cd zens-assignment-truong-van-tien/web
    composer install
    npm install
    ```
3. **Cấu hình cơ sở dữ liệu:**
    * Tạo cơ sở dữ liệu
    * Cập nhật tệp `.env` với thông tin xác thực cơ sở dữ liệu của bạn
4. **Chạy Migration:**
    ```bash
    php artisan migrate
    ```
5. **Seed Database (Tùy chọn):**
    * Nếu có seeder, hãy chạy nó để đưa câu chuyện cười vào cơ sở dữ liệu:
    ```bash
    php artisan db:seed --class=JokeSeeder 
    ```
6. **Khởi động Server dev:**
    ```bash
    php artisan serve
    ```
7. **Khởi động Front end dev:**
    ```bash
    npm run dev
    ```
**Ghi chú đánh giá**

* **Hoàn thiện:** Tôi đã cố gắng hoàn thành các yêu cầu cốt lõi của dự án. [Cung cấp tỷ lệ phần trăm hoàn thành hoặc liệt kê cụ thể các tính năng có thể thiếu nếu bạn không hoàn thành tất cả].
* **Commit Git:** Tôi đã sử dụng các thông điệp commit mô tả để ghi lại tiến độ của mình.
* **Tiêu chuẩn mã hóa:** Tôi đã tuân thủ các quy trình tốt nhất của Laravel và duy trì mã sạch, dễ đọc.
* **Thử thách:** [Nếu bạn gặp bất kỳ khó khăn đáng kể nào, hãy mô tả ngắn gọn ở đây.]

**Tính năng thưởng tiềm năng (Nếu triển khai)**

* **Thiết kế Responsive:** Website thích ứng với các kích thước màn hình khác nhau.

**Cảm ơn bạn đã xem xét ứng tuyển của tôi!**
