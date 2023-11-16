-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 31, 2023 lúc 05:16 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tintuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'songtho123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `category_name`, `des`) VALUES
(1, 'Bóng đá', 'Bóng đá'),
(2, 'Cầu lông', 'Cầu lông'),
(3, 'Tennis', 'Tennis'),
(4, 'Bóng bàn', 'Bóng bàn'),
(5, 'Bóng chuyền', 'Bóng chuyền'),
(6, 'Thể thao điện tử', ''),
(7, 'Bơi lội', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `category`, `thumbnail`, `admin`) VALUES
(1, '8 sao Ngoại hạng Anh suýt bị bán lại hóa người hùng: Có tên Maguire, Cucurella', 'Mùa giải Premier League 2023/24 đã đi được 9 vòng và lúc này các tân binh đã có thời gian để hòa nhập với các đội bóng mới, từ Doku, Mac Allister và Hojlund cho tới Jackson, Rice và Maddison. Nhưng cũng có những cầu thủ suýt bị bán trong mùa hè trước khi rốt cuộc ở lại và trở thành những cầu thủ rất hữu dụng. \r\nHarry Maguire là nhân vật nổi bật nhất của nhóm này, 3 mùa giải qua bị biêu riếu đủ điều nhưng gần đây đã chơi tốt đáng kể khi được điều động trong lúc hàng thủ MU tổn thất quân số. Điều này càng khiến những sự chỉ trích dành cho anh chỉ vì từ chối West Ham là không đáng có, Maguire không những đấu tranh cho vị trí của mình mà còn cho thấy lại hình ảnh của một trung vệ chất lượng, quyết đoán và dũng cảm.\r\n\r\nKhông chỉ Maguire, đồng đội của anh Scott McTominay gần đây đã bỗng trở thành một mối đe dọa vòng cấm lợi hại mang về lựa chọn ghi bàn cho MU trong bối cảnh Marcus Rashford chơi cực kỳ tệ hại. Vẫn còn thời gian để chúng ta biết McTominay có còn xứng đáng ở lại, nhưng tiền vệ   ', '2023-10-23', 'Bóng đá', 'maguire-mctominay-195-740-1698141395-978-width740height566.jpg', 'admin'),
(2, 'Hot girl cầu lông Thùy Linh đạt thứ hạng lịch sử, sáng cửa giành suất Olympic 2024', '(Tin thể thao) Với những màn thi đấu ấn tượng gần đây, tay vợt Nguyễn Thùy Linh chính thức có lần đầu tiên trong sự nghiệp lọt vào top 20 thế giới.\r\nTrên bảng xếp hạng của Liên đoàn cầu lông thế giới (BWF) được cập nhật chính thức vào ngày 24/10 mới đây, tay vợt Nguyễn Thùy Linh đã xuất sắc thăng tiến 3 bậc lên hạng 20 thế giới.\r\nTrước đó, vị trí cao nhất trong sự nghiệp mà Thùy Linh giành được là hạng 23 thế giới vào tháng 7 năm nay. Như vậy, Thùy Linh đã thiết lập cột mốc mới cho sự nghiệp của mình khi có lần đầu tiên lọt vào top 20 tay vợt nữ xuất sắc nhất hành tinh.\r\n\r\nChiến tích này đến từ những màn thể hiện ấn tượng của Thùy Linh tại các giải quốc tế trong thời gian vừa qua, đặc biệt là 2 giải đấu mở rộng diễn ra tại Phần Lan và Đan Mạch mới đây.\r\n\r\nCụ thể ở cầu lông quốc tế Phần Lan mở rộng 2023 thuộc cấp độ Super 500 World Tour, Thùy Linh đã liên tiếp đánh bại 2 cao thủ là Zhang Beiwen (Mỹ, hạng 10 thế giới) và Zhang Yi Man (Trung Quốc, hạng 15 thế giới) để thẳng tiến vào tứ kế ', '0000-00-00', 'Cầu lông', 'linh-3-1698138638-24-width740height430.jpg', 'tho'),
(3, 'Sắp tới ngày ra mắt, bom tấn vẫn bị game thủ ghẻ lạnh, ', 'Không ít người đã cảm thấy thất vọng trước những gì mà tựa game này mang tới.\r\n\n\n\r\n\n\n\r\n Chỉ còn chưa đầy một tháng nữa, The Day Before - một trong những bom tấn MMO sinh tồn lấy chủ đề về zombie sẽ ra mắt. Thế nhưng, thay vì tâm trạng háo hức chờ đợi, phần đông người chơi, dù có là những game thủ trung thành với thương hiệu sinh tồn, zombie lại đang tỏ một thái độ rất dửng dưng. Thậm chí, còn không ít lời \"tiên tri\" cho rằng bom tấn này sẽ chẳng thể ra mắt được như đúng kế hoạch.   ', '0000-00-00', 'Thể thao điện tử', 'tải xuống.jpg', 'admin'),
(4, 'Barca thắng nhờ tiền vệ 20 tuổi', 'TÂY BAN NHA-Tiền vệ 20 tuổi Fermin Lopez ghi bàn và kiến tạo giúp Barca thắng Shakhtar Donetsk 2-1 ở lượt ba bảng H Champions League.\r\nThêm một trận đấu Barca thắng nhờ cầu thủ trẻ, sau Lamine Yamal, Marc Guiu đến Lopez. Tiền vệ 20 tuổi chơi ở vị trí tiền vệ tấn công, ghi dấu giày vào hai bàn thắng cho đội nhà. Những tài năng trẻ tỏa sáng ở đội một đang cho thấy HLV Xavi Hernandez đang có lý khi trọng dụng những sản phẩm của lò La Masia.\r\nXavi phải dùng cầu thủ trẻ cùng vì nhiều trụ cột chấn thương, nhưng với trường hợp của tiền đạo Robert Lewandowski, người đá thay anh là Ferran Torres. Tiền đạo 23 tuổi trưởng thành từ lò Valencia, cập bến Barca tháng 1/2022 sau thời gian không thành công tại Man City.\r\n\r\nChính Torres mở tỷ số ở phút 28, sau khi Ilkay Gundogan treo bóng vào cấm địa cho Lopez thoát xuống sút dội xà ngang bật ra. Anh lao vào đá bồi tung lưới đội khách, rồi kéo áo ngoài lên mừng bàn và để lộ thông điệp bên trong cho bà. Tuy nhiên Torres mặc áo trong màu đỏ thẫm, khiến dòng chữ màu đen trở nên khó nhìn.\r\n\r\nTám phút sau, Lopez may mắn hơn với cú sút ở rìa cấm địa từ đường chuyền của Torres. Lần này tiền vệ 20 tuổi sút bóng trúng cột, nhưng vẫn vào lưới. Đây mới là bàn đầu tiên của Lopez tại Champions League, và là bàn thứ hai trong tám trận cho đội một Barca. Tiền vệ này đã có thể ghi thêm bàn trong hiệp hai, nhưng cú sút của anh một lần nữa trúng cột dọc bay ra ngoài.\r\n\r\nHLV Xavi tỏ ra vui hơn với bàn thắng của Lopez so với Torres, khi ông giơ hai tay lên cao rồi chia vui cùng em trai kiêm trợ lý Oscar Hernandez. Ít phút trước đó, chính Oscar gọi Lopez ra một góc để chỉ dẫn gì đó. Biểu cảm của anh em Xavi và Oscar lúc mừng bàn giống như họ vừa đưa ra quyết định đúng.', '2023-10-27', 'Bóng đá', 'lopez-jpeg-1698257808-7917-1698258303.jpg', 'admin'),
(5, 'HLV Mai Đức Chung xin lỗi khi thua Uzbekistan', 'UZBEKISTANHLV Mai Đức Chung nhận trách nhiệm khi Việt Nam thua đối thủ bị đánh giá thấp hơn ở vòng loại hai Olympic Paris 2024.\r\n\r\nViệt Nam xếp thứ 34 FIFA, hơn Uzbekistan 16 bậc và chưa thua đối thủ này trong quá khứ. Đến trận đấu trên sân Bunyodkor tối qua 26/10, Việt Nam vẫn chơi lấn lướt nhưng thua chung cuộc 0-1. Kết quả này khiến Việt Nam gần như hết cửa dự Olympic Paris 2024. Muốn tạo bất ngờ, Việt Nam phải thắng Ấn Độ ngày 29/10 và Nhật Bản ngày 1/11. Tuy nhiên, Nhật Bản cử đội hình mạnh nhất, và ở lần gần nhất chạm trán đã thắng Việt Nam 7-0 bằng đội hình hai tại Asiad 19.\r\n\r\n\"Tôi xin lỗi vì kết quả này\", HLV Mai Đức Chung nói sau trận. \"Là HLV trưởng, tôi nhận hoàn toàn trách nhiệm\".\r\nNhà cầm quân 71 tuổi đánh giá Việt Nam xứng đáng hòa hơn thua nếu các học trò tận dụng cơ hội tốt hơn. Dù vậy, ông thừa nhận khả năng phối hợp không như ý, đánh biên nhiều nhưng thiếu đường bóng vào vòng cấm chất lượng. Ngoài ra, tuyến giữa tranh chấp chưa quyết liệt và chuyền hỏng nhiều.\r\n\r\n\"Việt Nam không tận dụng được thế mạnh chuyền sệt\", ông Chung cho hay. \"Thay vào đó, cầu thủ lại chơi bóng bổng dẫn tới đánh mất ưu thế vào tay đối thủ vốn sở hữu chiều cao tốt hơn\".\r\n\r\nBàn thua duy nhất của Việt Nam diễn ra ở phút 30. Từ quả tạt cánh phải, Umida Zoirova tranh chấp bóng bổng với Trần Thị Thu Thảo, bóng bật ra ngược đà di chuyển của hàng thủ Việt Nam giúp Diyorakhon Khabibullaeva băng lên dứt điểm phá thế cân bằng.\r\n\r\nVòng loại hai bóng đá nữ Olympic Paris 2024 khu vực châu Á gồm 12 đội chia làm ba bảng. Các đội đá vòng tròn một lượt, chọn ra ba đội dẫn đầu và một đội nhì bảng thành tích tốt nhất vào vòng loại thứ ba. Sau đó, bốn đội chia làm hai cặp đá lượt đi và về. Hai đội thắng sẽ đại diện cho châu Á đến Olympic 2024.\r\n\r\nTrận thua này tiếp tục đánh dấu chuỗi phong độ nghèo nàn của Việt Nam từ khi bị loại ở vòng bảng World Cup 2023. Đến Asiad 19, Việt Nam thắng hai trận đầu nhưng thua đậm Nhật Bản ở lượt cuối nên bị loại từ vòng bảng.', '2023-10-27', 'Bóng đá', 'hlv-mai-duc-chung-viet-nam-uzb-5630-9140-1698342286.jpg', 'admin'),
(6, 'Ngôi sao cô đơn Nguyễn Thùy Linh tạo chuỗi điểm ấn tượng trước nhà vô địch Olympic', 'Không thể đánh bại tay vợt hạng 3 thế giới cũng là đương kim vô địch Olympic Chen Yu Fei (Trung Quốc) ở vòng 1 giải Pháp mở rộng nhưng tay vợt số 1 Việt Nam Nguyễn Thùy Linh cũng đã có những nỗ lực đáng ghi nhận.\r\n\r\nViệc lần đầu lên hạng 20 thế giới tạo động lực cho Nguyễn Thùy Linh bước vào tranh tài vòng 1 nội dung đơn nữ giải cầu lông Pháp mở rộng 2023 diễn ra tối nay (25.10), chạm trán với ngôi sao của cầu lông thế giới Chen Yu Fei.', '2023-10-26', 'Cầu lông', 'Nguyễn Thùy Linh dừng chân ở vòng 1 giải Pháp mở rộng 2023.jpg', 'admin'),
(7, 'Garnacho gặp vạ vì đăng biểu tượng khỉ', 'ANHAlejandro Garnacho có thể bị cấm thi đấu vì dùng biểu tượng khỉ trong bài đăng trên mạng xã hội về đồng đội Andre Onana.\r\n\r\nHôm 24/10, sau trận Man Utd thắng Copenhagen 1-0 ở lượt ba bảng A Champions League, Garnacho đăng ảnh chụp mừng pha cản phạt đền của Onana kèm hai biểu tượng khỉ đột trên mạng xã hội X.\r\n\r\nAnh xóa ảnh sau 15 phút, nhưng vẫn bị lưu lại bằng chứng. Liên đoàn Bóng đá Anh FA đang điều tra về thông điệp này.\r\nNăm 2019, FA từng cấm thi đấu một trận và phạt 65.000 USD đối với Bernardo Silva, do dùng hình ảnh nhân vật hoạt hình da đen trong bài đăng về đồng đội cũ Benjamin Mendy.\r\n\r\nMột năm sau đó, Edinson Cavani thậm chí bị cấm ba trận và phạt 120.000 USD vì gọi một người bạn ở Uruguay là \"negrito\" (người da đen nhỏ) trong bài đăng trên Instagram. Ở Uruguay, thuật ngữ này thể hiện sự quý mến. Tuy nhiên, Cavani vẫn xóa bình luận và nhận tội trước cáo buộc của FA.\r\n\r\nTrước nguy cơ Garnacho bị cấm thi đấu, Onana lên tiếng bảo vệ: \"Mọi người không thể áp đặt những gì được cho là xúc phạm đến tôi. Tôi biết chính xác ý nghĩa thông điệp của Garnacho, là tài năng và sức mạnh. Vấn đề này không nên đi xa hơn\".\r\n\r\nOnana thực hiện pha cản phạt đền khi trận Man Utd - Copenhagen bước sang phút 90+7. Sau cú sút chân trái của Jordan Larsson, thủ môn người Cameroon bay người đúng hướng cứu bàn thua cho Man Utd và bảo toàn chiến thắng. Trước đó, phút 72, Harry Maguire ghi bàn duy nhất cho đội chủ nhà.\r\n\r\nĐây là trận thắng đầu tiên của Man Utd tại bảng A Champions League mùa này, sau hai trận thua Bayern 3-4 và Galatasaray 2-3. \"Quỷ Đỏ\" hiện xếp thứ ba với ba điểm, trong khi Bayern dẫn đầu với chín điểm và Galatasaray xếp thứ hai với bốn điểm. Copenhagen xếp cuối với một điểm.\r\n\r\nMan Utd còn trận tiếp Bayern và hai trận làm khách trước hai đối thủ còn lại.', '2023-10-27', 'Bóng đá', 'New-Project-43-5857-1698380089.jpg', 'admin'),
(8, 'Haaland giải cơn khát bàn thắng tại Champions League', 'THỤY SĨ-Tiền đạo Erling Haaland ghi cú đúp khi Man City hạ Young Boys 3-1 để toàn thắng lượt đi vòng bảng Champions League.\r\nĐây là những pha lập công đầu tiên của Haaland ở Champions League mùa này. Tuy ghi 52 bàn sau 53 trận mùa trước, và 11 bàn sau 14 trận mùa này, tiền đạo Na Uy đã tịt ngòi năm trận liên tiếp ở sân chơi châu Âu, bao gồm hai trận bán kết với Real mùa trước, trận chung kết gặp Inter và hai trận gặp Sao Đỏ Belgrade, RB Leipzig tại vòng bảng mùa này.\r\n\r\nLần gần nhất Haaland nổ súng trước trận này là ở trận hòa Bayern 1-1 ở tứ kết lượt về mùa trước. Whoscored chấm anh 8,58 điểm, cao nhất trận.\r\nChiến thắng giúp Man City giữ đỉnh bảng G sau lượt đi. Họ là một trong bốn đội toàn thắng bên cạnh Bayern, Real và Barca. Bất chấp mối lo khi thi đấu trên mặt sân cỏ nhân tạo Wankdorf trong điều kiện trời mưa, đội ĐKVĐ vẫn tạo ra cuộc dạo chơi đúng nghĩa trong hiệp hai và đáng ra có thể thắng đậm hơn nếu không phung phí nhiều cơ hội.\r\nTrong hiệp một, Man City có ít nhất bốn tình huống hãm thành nguy hiểm. Haaland dứt điểm chệch cột phút 23 rồi sút trượt bóng khi quả tạt của Jack Grealish tìm đến anh ở vị trí thuận lợi. Những cơ hội rõ ràng nhất thuộc về Jeremy Doku. Phút 24, tân binh của Man City sút vào vị trí của Anthony Racioppi trong tình huống đối mặt. Cuối hiệp một, Doku suýt ghi siêu phẩm với pha đi bóng, cứa lòng sở trường nhưng vẫn không thắng được thủ môn Young Boys.\r\n\r\nTrận đấu sôi động hơn trong hiệp hai với những bàn liên tiếp. Từ quả tạt của Rodri, Ruben Dias bật cao đánh đầu đưa bóng dội xà. Manuel Akanji có mặt đúng chỗ để đá bồi. Trung vệ Thụy Sĩ ghi bàn trong lần trở lại quê hương và đây là pha lập công nhiều ý nghĩa với Akanji sau khi anh nhận thẻ đỏ ở trận gặp Brighton cuối tuần trước tại Ngoại hạng Anh.', '2023-10-27', 'Bóng đá', 'ufcambibezp7thoahnxhk7vfom-169-7458-3523-1698272818.jpg', 'admin'),
(9, 'Ronaldo thích bài chê bai Messi', 'Cristiano Ronaldo bình luận bằng những cảm xúc cười ra nước mắt, trong một video của Diario AS trên Instagram, về việc Lionel Messi không xứng đáng đoạt Quả Bóng Vàng thứ tám.\r\n\r\nHôm nay 31/10, AS đăng một video lên Instagram, trong đó Tổng biên tập Tomas Roncero bình luận về việc Messi nhận Bóng Vàng 2023 từ tạp chí France Football. Trong video này, Roncero nói bằng tiếng Tây Ban Nha, rằng Messi tới Inter Miami để giải nghệ, nhưng anh chơi như thể đã giải nghệ từ khi còn khoác áo PSG.\r\n\r\n\"Đúng là Messi đã vô địch World Cup, nhưng với sáu quả phạt đền\", Roncero nói. \"World Cup cũng diễn ra từ 10 tháng trước. Messi đã đoạt tám Bóng Vàng, nhưng đáng ra cậu chỉ xứng đáng với năm giải thưởng. Messi đang giữ Bóng Vàng của Andres Iniesta hoặc Xavi, cầu thủ từng đoạt sáu danh hiệu trong một mùa giải Robert Lewandowski và bây giờ là Vua phá lưới của mọi giải đấu Erling Haaland\".\r\nVideo của AS được Ronaldo ấn like, và anh bình luận bằng bốn biểu tượng \"cười ra nước mắt\". Bình luận của Ronaldo nhận được hơn 16.000 lượt like và hơn 4.000 lượt phản hồi chỉ sau sáu tiếng, trong khi video của AS chỉ có 13.000 lượt like.\r\n\r\nĐây không phải lần đầu Ronaldo có động thái ủng hộ những bài chê Messi trên mạng xã hội. Sau khi siêu sao Argentina giành Bóng Vàng năm 2021, Ronaldo cũng thích một bài chê Messi trên Instagram, sau đó bình luận: \"Factos\", nghĩa là \"sự thật\" trong tiếng Bồ Đào Nha.\r\n\r\nRonaldo là người được theo dõi nhiều nhất trên Instagram, với 609 triệu lượt. Messi đứng thứ hai với 490 triệu lượt theo dõi. Hai siêu sao cũng sở hữu tám trong 10 bài được like nhiều nhất trên mạng xã hội này.\r\n\r\nMessi được sút năm quả phạt đền tại World Cup 2022, ghi bốn bàn. Ngoài ra, anh còn ghi ba bàn khác, giúp Argentina vô địch sau khi thắng Pháp trên loạt đá luân lưu. Trong bốn kỳ World Cup trước đó, Messi chỉ một lần được đá phạt đền, nhưng không ghi bàn.\r\n\r\nSau khi ghi bàn ở mọi vòng đấu tại World Cup 2022, và nhận giải Cầu thủ hay nhất, Messi được tạp chí France Football trao Quả Bóng Vàng thứ tám tối 30/10 tại Paris. Anh vượt qua Bóng Bạc Erling Haaland, dù tiền đạo Na Uy ăn ba danh hiệu với Man City, phá kỷ lục ghi bàn trong một mùa giải Ngoại hạng Anh và giành Vua phá lưới Champions League.\r\n\r\nRonaldo đã giành năm Bóng Vàng, gần nhất đã cách đây sáu năm, khi anh cân bằng \"tỷ số\" 5-5 với Messi. Kể từ đó, Messi giành thêm ba Bóng Vàng vào các năm lẻ, vượt lên dẫn 8-5. Tạp chí của Pháp gọi Messi là \"vô cực\", với biểu tượng số 8 nằm ngang.\r\n\r\nRonaldo không được đề cử Quả Bóng Vàng 2023, sau kỳ World Cup đáng quên với chỉ một bàn thắng. Anh cũng đã chuyển sang Al Nassr tại Arab Saudi từ tháng 1/2023, khiến cơ hội giành thêm Bóng Vàng ngày càng giảm. Tiền đạo 38 tuổi vẫn giữ được khao khát thi đấu và mong muốn góp mặt tại Euro 2024, thậm chí là World Cup 2026.', '0000-00-00', '', 'Ronaldo-1665-1698758723.png', 'admin'),
(10, 'Ronaldinho: Tôi biết Messi vĩ đại từ khi cậu ấy 17 tuổi', 'Trong bài đăng trên The Athletic hôm nay, Ronaldinho kể về dự cảm cách đây 20 năm của anh về Lionel Messi - người vừa giành Quả Bóng Vàng thứ tám trong sự nghiệp. \r\nHè 2006, Barca du đấu Mỹ. Ronaldinho là đương kim chủ nhân Quả Bóng Vàng, sau khi vừa giúp CLB xứ Catalonia vô địch Champions League và La Liga dưới thời HLV Frank Rijkaard. Khi đến thăm bạn thân Kobe Bryant trên đất Mỹ, Ronaldinho dẫn theo một cậu nhóc.\r\n\r\n\"Ai đây?\", Bryant hỏi. Ronaldinho trả lời: \"Tôi giới thiệu anh với người sẽ trở thành cầu thủ bóng đá vĩ đại nhất mọi thời\". Lúc đó, Bryant tưởng Ronaldinho đùa, nên đáp lại: \"Chính anh, anh mới là người giỏi nhất chứ ai nữa\". Nhưng Ronaldinho xua tay: \"Không đâu. Cậu nhóc này rồi sẽ là người xuất sắc nhất\".\r\n\r\nCậu nhóc được đề cập ở đây là Lionel Messi.', '0000-00-00', '', 'messi-ronnie-jpeg-9835-1698750644.jpg', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
