CREATE TABLE `ideas` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `show_less` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
 `show_more` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
 `method_id` int(11) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `options` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `idea_id` int(11) NOT NULL,
 `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `votes` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `idea_id` int(11) NOT NULL,
 `option_id` int(11) NOT NULL,
 `vote_count` bigint(10) NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
 FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `ideas` (`id`, `name`, `show_less`, `show_more`, `method_id`) VALUES
(1, 'Run2learn', 'Students can listen to a podcast while...', 'Students can listen to a podcast while they run, exercise or commute. As part of a flipped classroom design, a course meeting is prepared by a podcast that delivers a conversation between the class lecturer and a representative of a real-world case organization that undergoes profound digital transformation. The podcast is led in by a clear description of the learning objectives and some structure and recommendations for viewpoints that encourage students to focus their attention on a select course topic, for example the IT governance, risk and compliance aspects of the case organization at hand.', 1),
(2, 'Immerse.Now!', 'A Virtual Reality-empowered digitalization...', 'A Virtual Reality-empowered digitalization of physical workplaces can be experienced by walking and looking around. Students can immerse themselves into the virtual equivalent of physical workplaces amenable to digitalization, such as industrial workplaces and Industry 4.0 enhancements. The workplaces are configurable and can be re-designed by the students. Each design can be experienced and solutions of individual students or student teams can be connected with each other to design business processes that link multiple workplaces together.', '1'),
(3, 'Foundation Video inputs', 'For hands-on content, e.g., XML/XSLT...', 'For hands-on content, e.g., XML/XSLT, students can prepare the basic principles by watching short video sequences (what are xml complex types) with a short quiz at the end. These inputs will help to get the actual lecture started with some pre-knowledge so that the lecture/seminar can focus on discussions & exercises. ', '1'),
(4, 'Play while you learn', 'This idea is about putting...', 'This idea is about putting the concept of Gamification into education. Similar to SQL Island, a fun game story is developed that allows a player to 1) get a quick repetition of learning content, 2) decide for a solution, and get 3) feedback about the correctness before the story can continue. Again some technical knowledge would be most easy to implement. Yet, it would also be cool to implement a more management topic. Similar to the website game that once was published on the website of Panama papers. ', '1'),
(5, 'CodeEditor', 'When teaching students...', 'When teaching students rather practical topics like data analysis or programming, an online code editor could be provided. An integration with learning management platforms would allow lecturers to give homework or even exams over the web and to get the students'' work back in a format that''s easy to process and might even grade automatically. The students could practice their coding skills from any computer in the world, as long as they have a web browser. ', '1'),
(6, 'Cool-laboration', 'Students often must solve...', 'Students often must solve group tasks in their seminars and do that always with the same people. Why not collaborate with other students from around the world? A video-messenger with collaboration features could connect students who are working on the same topic. Lecturers can submit their current topic and get matched with another lecturer who has a class working on the same topic. They can then discuss and arrange a virtual meeting, or if it doesn''t fit they look for further opportunities. Both students and lecturers profit from different perspectives and might make some new friends!', '1'),
(7, 'Statorial', 'There is a number of procedure...', 'There is a number of procedures, involving given software use, that students should be able to perform. This refers especially to various statistical tests and analyses in SPSS, R Studio or Stata. Statorial would be a collection of tutorials, with detailed step-by-step instructions of how to perform them in given software. Apart from the software-related instructions, there would be a brief description of a test and an example of when to use it with a walkthrough.', '1'),
(8, 'AI-Reflector', 'A strong grounding in IT...', 'A strong grounding in IT is increasingly important for business education. For students to understand, appreciate and advance the concepts of IS, critical thinking is required. Students should drop the archaistic strategy of learning learning material by heart and should enhance their learning experience through critical thinking. The AI-Reflector is here to support this process. The tool supports students by providing cases studies and reflective questions, so that students focus on identifying their own solutions on a real-life problem. The tool does not "correct" the solutions of the students but rather asks further questions so that the students can take into consideration all potential options. According to the students answers, well-known examples can be provided. If, for example, a student is expected to recommend solutions on how forecasting accuracy could be improved and mentions through AI, then the tool refers to the well-known example of Nestle for further reflection. ', '1'),
(9, 'DailyQ', 'Mobile, quiz application...', 'Mobile, quiz application testing and consolidating students'' knowledge after the lecture. Everyday in the morning (or other time) a single multiple-choice question appears that should be answered. Depending on the frequency of classes, there could be at least 7 potential areas to ask about (1 for each day of the week). The questions could also repeat themselves, especially in case the answer was not correct at the first attempt. There would be an elaborate explanation available as well. ', '1');

INSERT INTO `options` (`id`, `idea_id`, `section`) VALUES
(1, 1, 'Wow'),
(2, 1, 'Now'),
(3, 1, 'How'),
(4, 1, 'No'),
(5, 2, 'Wow'),
(6, 2, 'Now'),
(7, 2, 'How'),
(8, 2, 'No'),
(9, 3, 'Wow'),
(10, 3, 'Now'),
(11, 3, 'How'),
(12, 3, 'No'),
(13, 4, 'Wow'),
(14, 4, 'Now'),
(15, 4, 'How'),
(16, 4, 'No'),
(17, 5, 'Wow'),
(18, 5, 'Now'),
(19, 5, 'How'),
(20, 5, 'No'),
(21, 6, 'Wow'),
(22, 6, 'Now'),
(23, 6, 'How'),
(24, 6, 'No'),
(25, 7, 'Wow'),
(26, 7, 'Now'),
(27, 7, 'How'),
(28, 7, 'No'),
(29, 8, 'Wow'),
(30, 8, 'Now'),
(31, 8, 'How'),
(32, 8, 'No'),
(33, 9, 'Wow'),
(34, 9, 'Now'),
(35, 9, 'How'),
(36, 9, 'No');


INSERT INTO `votes` (`id`, `idea_id`, `option_id`, vote_count) VALUES
(1, 1, 1, 0),
(2, 1, 2, 0),
(3, 1, 3, 0),
(4, 1, 4, 0),
(5, 2, 1, 0),
(6, 2, 2, 0),
(7, 2, 3, 0),
(8, 2, 4, 0),
(9, 3, 1, 0),
(10, 3, 2, 0),
(11, 3, 3, 0),
(12, 3, 4, 0),
(13, 4, 1, 0),
(14, 4, 2, 0),
(15, 4, 3, 0),
(16, 4, 4, 0),
(17, 5, 1, 0),
(18, 5, 2, 0),
(19, 5, 3, 0),
(20, 5, 4, 0),
(21, 6, 1, 0),
(22, 6, 2, 0),
(23, 6, 3, 0),
(24, 6, 4, 0),
(25, 7, 1, 0),
(26, 7, 2, 0),
(27, 7, 3, 0),
(28, 7, 4, 0),
(29, 8, 1, 0),
(30, 8, 2, 0),
(31, 8, 3, 0),
(32, 8, 4, 0),
(33, 9, 1, 0),
(34, 9, 2, 0),
(35, 9, 3, 0),
(36, 9, 4, 0);








CREATE TABLE `postitvotes` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `idea_id` int(11) NOT NULL,
 `vote_count_session` int(11) NOT NULL,
 `vote_count` bigint(10) NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `postitvotes` (`id`, `idea_id`, vote_count, vote_count_session) VALUES
(1, 1, 0, 0),
(2, 2, 0, 0),
(3, 3, 0, 0),
(4, 4, 0, 0),
(5, 5, 0, 0),
(6, 6, 0, 0),
(7, 7, 0, 0),
(8, 8, 0, 0),
(9, 9, 0, 0);






CREATE TABLE `criteriavotes` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `idea_id` int(11) NOT NULL,
 `feasible_vote` bigint(10) NOT NULL,
 `novel_vote` bigint(10) NOT NULL,
 `elaborate_vote` bigint(10) NOT NULL,
 `relevant_vote` bigint(10) NOT NULL,
 `feasible_counter` bigint(10) NOT NULL,
 `novel_counter` bigint(10) NOT NULL,
 `elaborate_counter` bigint(10) NOT NULL,
 `relevant_counter` bigint(10) NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION)
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `criteriavotes` (`id`, `idea_id`, feasible_vote, novel_vote, elaborate_vote, relevant_vote, feasible_counter, novel_counter, elaborate_counter, relevant_counter) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 2, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 4, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 5, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 6, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 8, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 9, 0, 0, 0, 0, 0, 0, 0, 0);

CREATE TABLE `useraccounts` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255)  NOT NULL,
  PRIMARY KEY (`username`)
);
INSERT INTO `useraccounts`(`username`, `password`) VALUES
('oer-admin','$2y$10$qCgb4MKzbMKAqUU2LOFBQ.wGoAD6yBElFA7V7EPwK.QGCViJjx4mu');
