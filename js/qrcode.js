const QRCode = require('qrcode');

const link = 'amonyanson.github.io/my_website/index.html';
const qrCode = new QRCode(link, {
  errorCorrectionLevel: 'H',
  type: 'image/png',
  renderer: {
    width: 200,
    height: 200,
  },
});

const qrCodeImage = qrCode.toDataURL();