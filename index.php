<?php
//������������� cURL � ������� ������
$ch = curl_init('https://www.gazeta.ru/export_news.shtml'); //������ ������
//��������� �����
curl_setopt($ch, CURLOPT_USERAGENT, 'poshli na her sozdeteli toster');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_REFERER, 'http://google.com');//����� ���������
//���������� (��������� ����������� �� �����)
curl_exec($ch);
//�������� ����������
curl_close($ch);