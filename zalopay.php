<html>

<head></head>

<body>
    <div class="ReactModalPortal">
        <div class="ReactModal__Overlay ReactModal__Overlay--after-open"
            style="position: fixed; inset: 0px; background-color: rgba(39, 39, 42, 0.7); z-index: 10000;">
            <div class="ReactModal__Content ReactModal__Content--after-open ewallet-modal" tabindex="-1" role="dialog"
                aria-modal="true"
                style="border-radius: 12px; top: 50%; left: 50%; bottom: auto; width: 708px; transform: translate(-50%, -50%); padding: 0px; background: rgb(255, 255, 255); position: absolute; outline: none; border: none;">
                <div class="styles__StyledQR-sc-17o5jhk-0 jaZqMN">
                    <div class="qr-heading">
                        <h3 class="qr-heading__title"><img src="image/zalopay.png" alt="icon" width="32" height="32">Thanh
                            toán bằng ví ZaloPay</h3>
                        <div class="qr-heading__btn"><a href="vnpay.php">Đổi phương
                                thức khác</a></div>
                    </div>
                    <div class="qr-content">
                        <div class="qr-content__left">
                            <div class="qr-content__code"><img src="image/qr.png" height="300" width="300"
                                    style="height: 250px; width: 250px;"></canvas></div>
                            <div class="qr-content__amount"><span>Tổng tiền:</span> <b>143.000 ₫</b></div>
                        </div>
                        <div class="qr-content__right">
                            <div class="qr-content__desc">
                                <h4>Quét mã QR để thanh toán</h4>
                                <div class="step-description"><span class="step-number">1</span>
                                    <p>Mở <b>ứng dụng ZaloPay</b> trên điện thoại</p>
                                </div>
                                <div class="step-description"><span class="step-number">2</span>
                                    <p>Trên ZaloPay, chọn biểu tượng<img
                                            src="image/quet.png"
                                            alt="icon"><b>Quét mã QR</b></p>
                                </div>
                                <div class="step-description"><span class="step-number">3</span>
                                    <p>Quét mã QR ở trang này và thanh toán</p>
                                </div>
                            </div>
                            <div class="qr-content__time">
                                <p>Giao dịch kết thúc sau</p>
                                <?php
                                    include "coutdown.php"
                                    ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        html {
            line-height: 1.15;
            text-size-adjust: 100%;
        }

        html {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-size: 14px;
            background-color: #efefef;
        }

        .jaZqMN .qr-heading {
            border-bottom: 1px solid rgb(235, 235, 240);
            padding: 20px 24px;
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
        }

        .jaZqMN .qr-heading__title {
            margin: 0px;
            font-size: 17px;
            font-weight: 500;
            display: inline-flex;
            -webkit-box-align: center;
            align-items: center;
        }

        .jaZqMN .qr-heading__title img {
            margin-right: 10px;
        }

        .jaZqMN .qr-heading__btn a {
            display: inline-block;
            color: rgb(13, 92, 182);
            font-size: 14px;
            text-decoration: none;
        }

        .jaZqMN .qr-heading__btn a {
            display: inline-block;
            color: rgb(13, 92, 182);
            font-size: 14px;
            text-decoration: none;
        }

        .jaZqMN .qr-content {
            display: flex;
            padding: 20px 24px;
        }

        .jaZqMN .qr-content__left {
            width: 256px;
            background: rgb(245, 245, 250);
            border-radius: 16px;
            padding: 16px;
            margin-right: 40px;
        }

        .jaZqMN .qr-content__code {
            background: rgb(255, 255, 255);
            box-shadow: rgba(40, 40, 43, 0.16) 0px 2px 8px;
            border-radius: 8px;
            padding: 12px;
        }

        .jaZqMN .qr-content__amount {
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            margin-top: 16px;
            font-size: 14px;
            line-height: 20px;
        }

        .jaZqMN .qr-content__amount span {
            color: rgb(128, 128, 137);
        }

        .jaZqMN .qr-content__amount b {
            font-size: 16px;
            color: rgb(56, 56, 61);
        }

        .jaZqMN .qr-content__right {
            flex: 1 1 0%;
            display: flex;
            flex-direction: column;
        }

        .jaZqMN .qr-content__desc h4 {
            margin: 0px 0px 20px;
            font-size: 20px;
            font-weight: 500;
            color: rgb(36, 36, 36);
        }

        .jaZqMN .qr-content__desc .step-description {
            color: rgb(128, 128, 137);
            font-size: 14px;
            line-height: 20px;
            display: flex;
            align-items: flex-start;
            margin-bottom: 16px;
        }

        .jaZqMN .qr-content__desc .step-description .step-number {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: rgb(26, 148, 255);
            color: rgb(255, 255, 255);
            margin-right: 8px;
            font-weight: 500;
            flex-shrink: 0;
            text-align: center;
        }

        b,
        strong {
            font-weight: 500;
        }

        .jaZqMN .qr-content__desc .step-description img {
            width: 24px;
            display: inline-block;
            vertical-align: middle;
            margin: 0px 5px;
        }

        img {
            max-width: 100%;
        }

        .jaZqMN .qr-content__desc .step-description p {
            margin: 0px;
        }

        .jaZqMN .qr-content__time {
            background: rgb(255, 245, 236);
            border-radius: 4px;
            padding: 13px 0px;
            display: block;
            text-align: center;
            margin-top: auto;
        }

        .jaZqMN .qr-content__time p {
            margin: 0px 0px 10px;
            color: rgb(120, 120, 120);
            font-size: 14px;
        }

        .iJHAWk span {
            background: rgb(253, 130, 10);
            color: rgb(255, 255, 255);
            padding: 5px 7px;
            display: inline-block;
            border-radius: 8px;
            margin: 0px 10px;
            font-size: 15px;
        }

        .jaZqMN .qr-content__time {
            background: rgb(255, 245, 236);
            border-radius: 4px;
            padding: 13px 0px;
            display: block;
            text-align: center;
            margin-top: auto;
        }
    </style>
</body>

</html>