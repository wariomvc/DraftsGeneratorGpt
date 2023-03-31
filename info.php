Google\Service\Gmail\Message Object
(
[collection_key:protected] => labelIds
[historyId] => 2043
[id] => 1873505c7f011d72
[internalDate] => 1680221773000
[labelIds] => Array
(
[0] => UNREAD
[1] => IMPORTANT
[2] => CATEGORY_PERSONAL
[3] => INBOX
)

[payloadType:protected] => Google\Service\Gmail\MessagePart
[payloadDataType:protected] =>
[raw] =>
[sizeEstimate] => 5518
[snippet] => Hola saludos Felisa, quisiera ver si me pudieras tener una langosta asada para este fin de semana. -- W@rio
[threadId] => 1873505c7f011d72
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

[payload] => Google\Service\Gmail\MessagePart Object
(
[collection_key:protected] => parts
[bodyType:protected] => Google\Service\Gmail\MessagePartBody
[bodyDataType:protected] =>
[filename] =>
[headersType:protected] => Google\Service\Gmail\MessagePartHeader
[headersDataType:protected] => array
[mimeType] => multipart/alternative
[partId] =>
[partsType:protected] => Google\Service\Gmail\MessagePart
[partsDataType:protected] => array
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

[headers] => Array
(
[0] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Delivered-To
[value] => felisarestaurante@gmail.com
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[1] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Received
[value] => by 2002:a05:6870:a7a7:b0:17a:e009:9d11 with SMTP id x39csp262249oao; Thu, 30 Mar 2023 17:16:23 -0700 (PDT)
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[2] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => X-Received
[value] => by 2002:a0d:d94a:0:b0:544:b871:bcb0 with SMTP id
b71-20020a0dd94a000000b00544b871bcb0mr23769863ywe.12.1680221783775; Thu, 30 Mar 2023 17:16:23 -0700 (PDT)
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[3] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => ARC-Seal
[value] => i=1; a=rsa-sha256; t=1680221783; cv=none; d=google.com; s=arc-20160816;
b=Zk+jumSPm06T3j6LUxVjWWPF++lkpNetcEfhHQylGk/uoqZioTtWGk/QA4kSz4zK0a
6gNZJWncY/byL5P5FeQQWmcrPbHpMzZ6cvg/omra/DPVkIURF6SnC2UH0L+WWUrCrHSY
SAYIF0zusEP1G9AQ+fi5KciuuKiLM4HaPFECDnHAnyv+fgz+OoUWKBbN67VMuyuV2Nqt
uXdN1MsEEn62a2ZvBqoqGzq70gAITmf5kvnoCaaOZNlNx8PYES4oOOkspcgPPPQdTxS8
EgUT9fuUJSc2Gd3eK8JLMDXokrkVVN1pc1DEkQaxLh+xJEOdB7E5CBsaeRJDAmecjfXI mjPg==
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[4] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => ARC-Message-Signature
[value] => i=1; a=rsa-sha256; c=relaxed/relaxed; d=google.com; s=arc-20160816;
h=to:subject:message-id:date:from:mime-version:dkim-signature; bh=TzMsXKH+k58G9Dk7IveeJJNCmUWwpHBwV9k2HQoqiaw=;
b=JlKCcM8LCtPxvuOTZmKcOo5HV+hMInryZm+dQgKD5aDNUshW3i2s6bm90XZQgrlZzA
D7Gfk4X/1MV/nUHLgXaLx1CCvGrLsNaTC2+ChBLPuxBR2hPpDKs16QP/R6T0g3+8wrBT
goXUuvm+HaUPt2eK1ZJKl4ldOJWqy/dtyP8PY4/GDwc6TCaoZuE8/OtL8X/lkLAB2MXG
5YYS4gm3AuXFQE9liYiT8LZX4By9iiOcz41olxS6nm5YsMCrPaWsUYMX+xH2kBbKRfiN
7OttWVjPhIDSt8x6mED/q4KYzO+szOenIrCP1TWXrx/r0zt6fMuPaaPzHtHioczRG9ob t5Kg==
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[5] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => ARC-Authentication-Results
[value] => i=1; mx.google.com; dkim=pass header.i=@gmail.com header.s=20210112 header.b=GG1Ckme8; spf=pass (google.com:
domain of wario.mvc@gmail.com designates 209.85.220.41 as permitted sender) smtp.mailfrom=wario.mvc@gmail.com;
dmarc=pass (p=NONE sp=QUARANTINE dis=NONE) header.from=gmail.com
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[6] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Return-Path
[value] =>
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[7] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Received
[value] => from mail-sor-f41.google.com (mail-sor-f41.google.com. [209.85.220.41]) by mx.google.com with SMTPS id
k7-20020a81c847000000b00500c2c3aeddsor358843ywl.127.2023.03.30.17.16.23 for (Google Transport Security); Thu, 30 Mar
2023 17:16:23 -0700 (PDT)
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[8] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Received-SPF
[value] => pass (google.com: domain of wario.mvc@gmail.com designates 209.85.220.41 as permitted sender)
client-ip=209.85.220.41;
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[9] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Authentication-Results
[value] => mx.google.com; dkim=pass header.i=@gmail.com header.s=20210112 header.b=GG1Ckme8; spf=pass (google.com:
domain of wario.mvc@gmail.com designates 209.85.220.41 as permitted sender) smtp.mailfrom=wario.mvc@gmail.com;
dmarc=pass (p=NONE sp=QUARANTINE dis=NONE) header.from=gmail.com
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[10] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => DKIM-Signature
[value] => v=1; a=rsa-sha256; c=relaxed/relaxed; d=gmail.com; s=20210112; t=1680221783;
h=to:subject:message-id:date:from:mime-version:from:to:cc:subject :date:message-id:reply-to;
bh=TzMsXKH+k58G9Dk7IveeJJNCmUWwpHBwV9k2HQoqiaw=; b=GG1Ckme8fBQNFs5sbsTG7NufOtaiRfvXjhOebASFqOwCFbNQrUwjM5mLBsI4airLDN
d8FqqdOr4waM8O6dKVB2xVHAs6UE9mncMWK6YU62bGvAVnna61QIZwNcjGjGGmSrwlXX
Qms83pUylonBWWbgGi7IQn4Nqutm0xbVf+TqDWswozOoRwibfyUcn4g3ZEj9sUgYTvlE
/7qa3bgtc65JXfDj0SOdLovxJtS8thdkrtANOcOmd6NP3eJItMjV7/s++/ZlraMv2hMo
RH1oRcXINbsrc0g3OjcO//lr3SSyp2S3AlciNrcTQNjUq4L352zuphdqTCM3xdPTdAOI 0XYg==
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[11] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => X-Google-DKIM-Signature
[value] => v=1; a=rsa-sha256; c=relaxed/relaxed; d=1e100.net; s=20210112; t=1680221783;
h=to:subject:message-id:date:from:mime-version:x-gm-message-state :from:to:cc:subject:date:message-id:reply-to;
bh=TzMsXKH+k58G9Dk7IveeJJNCmUWwpHBwV9k2HQoqiaw=; b=crmWhkG8HYxf7+eEh+ZXk74IxIVFkxX2nTaWmi3ENkWFcq4ZLMCwbIOqc+YvEBYeo/
EGixqqZ5JjnhNKE+glP5nXjSBJOw1XJS54xKfWrN/1toh+2VH8Q09wkA1cTJLTSKtRlT
0vhIBpr/e61L3y8vmp8vdIjTzS0HGZ8v/JwrCHqu46+aE4FKoFClsOHQ/8Kp67QpDlsf
R0tQsbD2ZeBkvKZWtvig2jgrhrKuG8ZA04NKYpxGrZY1aNTOMxVNii2Q9Wv7PhMtNQIx
W6v6B1bqLFgJ+TC43S9RcwoAeTnlv9E5rSvWwjEbJhW0nPl/74FlXLV9kgRlTDQ6/TYn vvTQ==
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[12] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => X-Gm-Message-State
[value] => AAQBX9c5//FO1rG52XsaeKzoaDggPFeTmBl1hUeF34gkzKK7pIguPX2q hbsGVzkOVUq/bblxWen2h6sfGXBFb9q61JTN5mgDjNXHMvY=
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[13] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => X-Google-Smtp-Source
[value] => AKy350b2WiSRaqXj7FaBQpf1uoXs2xw25Cnhz/WKcqJkvGmt2DBOgnw/urQyYPW4Ie2uATbLs4vvzlwCeeTwh6Y8Uck=
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[14] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => X-Received
[value] => by 2002:a81:ec08:0:b0:545:6250:58ec with SMTP id
j8-20020a81ec08000000b00545625058ecmr11905264ywm.4.1680221783330; Thu, 30 Mar 2023 17:16:23 -0700 (PDT)
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[15] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => MIME-Version
[value] => 1.0
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[16] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => From
[value] => mario valenzuela chagoya
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[17] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Date
[value] => Thu, 30 Mar 2023 18:16:13 -0600
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[18] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Message-ID
[value] =>
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[19] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Subject
[value] => Encargar una Langosta
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[20] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => To
[value] => felisarestaurante@gmail.com
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[21] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Content-Type
[value] => multipart/alternative; boundary="0000000000008a324505f8271ece"
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

)

[body] => Google\Service\Gmail\MessagePartBody Object
(
[attachmentId] =>
[data] =>
[size] => 0
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[parts] => Array
(
[0] => Google\Service\Gmail\MessagePart Object
(
[collection_key:protected] => parts
[bodyType:protected] => Google\Service\Gmail\MessagePartBody
[bodyDataType:protected] =>
[filename] =>
[headersType:protected] => Google\Service\Gmail\MessagePartHeader
[headersDataType:protected] => array
[mimeType] => text/plain
[partId] => 0
[partsType:protected] => Google\Service\Gmail\MessagePart
[partsDataType:protected] => array
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

[headers] => Array
(
[0] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Content-Type
[value] => text/plain; charset="UTF-8"
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

)

[body] => Google\Service\Gmail\MessagePartBody Object
(
[attachmentId] =>
[data] =>
SG9sYSBzYWx1ZG9zIEZlbGlzYSwgcXVpc2llcmEgdmVyIHNpIG1lIHB1ZGllcmFzIHRlbmVyIHVuYSBsYW5nb3N0YSBhc2FkYQ0KcGFyYSBlc3RlIGZpbiBkZSBzZW1hbmEuDQoNCi0tIA0KV0ByaW8NCg==
[size] => 115
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

)

[1] => Google\Service\Gmail\MessagePart Object
(
[collection_key:protected] => parts
[bodyType:protected] => Google\Service\Gmail\MessagePartBody
[bodyDataType:protected] =>
[filename] =>
[headersType:protected] => Google\Service\Gmail\MessagePartHeader
[headersDataType:protected] => array
[mimeType] => text/html
[partId] => 1
[partsType:protected] => Google\Service\Gmail\MessagePart
[partsDataType:protected] => array
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

[headers] => Array
(
[0] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Content-Type
[value] => text/html; charset="UTF-8"
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[1] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Content-Transfer-Encoding
[value] => quoted-printable
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

)

[body] => Google\Service\Gmail\MessagePartBody Object
(
[attachmentId] =>
[data] =>
PGRpdiBkaXI9Imx0ciI-SG9sYSBzYWx1ZG9zIEZlbGlzYSwgcXVpc2llcmEgdmVyIHNpIG1lIHB1ZGllcmFzIHRlbmVyIHVuYSBsYW5nb3N0YSBhc2FkYSBwYXJhIGVzdGUgZmluIGRlIHNlbWFuYS48YnIgY2xlYXI9ImFsbCI-PGRpdj48YnI-PC9kaXY-PHNwYW4gY2xhc3M9ImdtYWlsX3NpZ25hdHVyZV9wcmVmaXgiPi0tIDwvc3Bhbj48YnI-PGRpdiBkaXI9Imx0ciIgY2xhc3M9ImdtYWlsX3NpZ25hdHVyZSIgZGF0YS1zbWFydG1haWw9ImdtYWlsX3NpZ25hdHVyZSI-PGRpdiBkaXI9Imx0ciI-PGZvbnQgZmFjZT0idGFob21hLCBzYW5zLXNlcmlmIj5XQHJpbzwvZm9udD48L2Rpdj48L2Rpdj48L2Rpdj4NCg==
[size] => 346
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

)

)

)

)
Google\Service\Gmail\Message Object
(
[collection_key:protected] => labelIds
[historyId] => 1790
[id] => 18734f1ce5643290
[internalDate] => 1680220474000
[labelIds] => Array
(
[0] => UNREAD
[1] => CATEGORY_PERSONAL
[2] => INBOX
)

[payloadType:protected] => Google\Service\Gmail\MessagePart
[payloadDataType:protected] =>
[raw] =>
[sizeEstimate] => 4763
[snippet] => Hola Felisa, Me gustaría encargarte un pollo asado. Un abrazo, María
[threadId] => 18734f1ce5643290
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

[payload] => Google\Service\Gmail\MessagePart Object
(
[collection_key:protected] => parts
[bodyType:protected] => Google\Service\Gmail\MessagePartBody
[bodyDataType:protected] =>
[filename] =>
[headersType:protected] => Google\Service\Gmail\MessagePartHeader
[headersDataType:protected] => array
[mimeType] => text/html
[partId] =>
[partsType:protected] => Google\Service\Gmail\MessagePart
[partsDataType:protected] => array
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

[headers] => Array
(
[0] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Delivered-To
[value] => felisarestaurante@gmail.com
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[1] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Received
[value] => by 2002:a05:6870:a7a7:b0:17a:e009:9d11 with SMTP id x39csp252053oao; Thu, 30 Mar 2023 16:54:35 -0700 (PDT)
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[2] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => X-Google-Smtp-Source
[value] => AKy350YyZ+6RvrFI1Ji8ZthOH3XIeeZqccRYQ7kRjw4eVtpxL8szdvEqufBhDQrJDHLh0QP+NrFb
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[3] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => X-Received
[value] => by 2002:a17:906:2695:b0:920:7827:302 with SMTP id
t21-20020a170906269500b0092078270302mr7102364ejc.18.1680220474969; Thu, 30 Mar 2023 16:54:34 -0700 (PDT)
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[4] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => ARC-Seal
[value] => i=1; a=rsa-sha256; t=1680220474; cv=none; d=google.com; s=arc-20160816;
b=a6foDkLWwdk6x2WHfYUAnvxXFk8WsEGVE0azFb8G79IYQlGpFKyBhNyYNnOyfLLWNJ
Ws/iL2AP0d7fe+95zR+AlDxMEY9LbgjfYxC+ZF0Gy0iy4DWSCq1MBF5nGtH8iPuR6Tlt
7AEJ/QDJGArnRdkUi95h6P6hXPkzzpoId5qZ2bjRmGZ/q8412URG0mlbTkoSZetZdSfG
L/A+ynFuoeOmCnOkoFYlmWXAQIJVKB88nbREN07s8vC3fi4r5cF0yfwWn5NGuKNikmys
ClkTXc+Ls9G5jbXBN9cDfCarUWJ+sXmChZilArguDwvqeKm1al4iacgrmxHm/N1DuzND SBDg==
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[5] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => ARC-Message-Signature
[value] => i=1; a=rsa-sha256; c=relaxed/relaxed; d=google.com; s=arc-20160816;
h=ui-outboundreport:sensitivity:importance:date:subject:to:from :message-id:mime-version;
bh=O1cw8EgFJ5GBcuVqvKwOeJUWHxOTTuFMb9HGG5HFW0g=; b=zjdeB+rUDXssMM7vq7jHQYzvumyxWe1ZfX9gRp+Q7FuOAmtAtqy3NRu5EoypS9dtNy
dvtjGxl3SoWKBRbO0YLlo3StuTjcYdq8h5414BBZs9d2n8Y7xsMeBe6fVWMNUNY0/Wh3
94hD/fCEcxiw2MJ8V0uFEnA7PK/CWrqKdyKPvl+oGLVAICDaescO7ZDseSacDTxWsefO
DmHfO3OJLN3TIqW1FWA6OW2TrYh4XCl6uw3/iBO6heiKI8s35wMJksw2/m5nzfIc/b9e
XU6MhoWlnRIu4zZWPt08e/sil6wBuLpQPzUxce0Jh0d/ovAorEcQBY6ts7JZiPxkGDBK 7Jrw==
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[6] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => ARC-Authentication-Results
[value] => i=1; mx.google.com; spf=pass (google.com: domain of clientederestaurante@gmx.com designates 212.227.15.19 as
permitted sender) smtp.mailfrom=clientederestaurante@gmx.com; dmarc=pass (p=NONE sp=NONE dis=NONE) header.from=gmx.com
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[7] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Return-Path
[value] =>
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[8] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Received
[value] => from mout.gmx.net (mout.gmx.net. [212.227.15.19]) by mx.google.com with ESMTPS id
jx12-20020a170906ca4c00b0093dd2150283si830735ejb.715.2023.03.30.16.54.34 for (version=TLS1_3
cipher=TLS_AES_256_GCM_SHA384 bits=256/256); Thu, 30 Mar 2023 16:54:34 -0700 (PDT)
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[9] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Received-SPF
[value] => pass (google.com: domain of clientederestaurante@gmx.com designates 212.227.15.19 as permitted sender)
client-ip=212.227.15.19;
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[10] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Authentication-Results
[value] => mx.google.com; spf=pass (google.com: domain of clientederestaurante@gmx.com designates 212.227.15.19 as
permitted sender) smtp.mailfrom=clientederestaurante@gmx.com; dmarc=pass (p=NONE sp=NONE dis=NONE) header.from=gmx.com
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[11] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Received
[value] => from [94.73.35.144] ([94.73.35.144]) by web-mail.gmx.net (3c-app-mailcom-bs15.server.lan [172.19.170.183])
(via HTTP); Fri, 31 Mar 2023 01:54:34 +0200
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[12] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => MIME-Version
[value] => 1.0
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[13] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Message-ID
[value] =>
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[14] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => From
[value] => "María Comensal"
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[15] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => To
[value] => felisarestaurante@gmail.com
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[16] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Subject
[value] => Encargar un pollo asado
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[17] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Content-Type
[value] => text/html; charset=UTF-8
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[18] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Date
[value] => Fri, 31 Mar 2023 01:54:34 +0200
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[19] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Importance
[value] => normal
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[20] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => Sensitivity
[value] => Normal
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[21] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => X-Priority
[value] => 3
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[22] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => X-Provags-ID
[value] => V03:K1:GZLhduNWNFUSV4GbKL1yRAvfKVnZhgy1vGV0de3OEyt078r0gDfNGVXPL8eD/zgjTyH6O
vcbG6iBIuCI03iCh92elhZf7kjkLl+W3Pyckrq/wVIDrWoO9LRyiOoUFjJ1yW3oFFj8VB8tv5s6G
alpwDsuUZy/9qPvdvvzMUuO8Re+8H3qCc/XIlYQ80t2AsGwcXrJRq+uL1sSGh0fd3N39B+A3E2Yv
BSKJBvqDofVcC7prsIXlQPbQFqRsI3R1Tunpn+KWmZuKJho/vLzD1IwfjJ8tDBJSXcK0J6uuIQAR qY=
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[23] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => X-Spam-Flag
[value] => NO
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

[24] => Google\Service\Gmail\MessagePartHeader Object
(
[name] => UI-OutboundReport
[value] => notjunk:1;M01:P0:KDe6bRCa2Dc=;hRgKuZqEWRdkhMDImfDNQ34shik
lxXJ76/wPE3/dtrZ5aLvjxM55zQxMIoEtnK+KDCkbqq6VVNlKCCiYd1Na2+25MImWAsRF92WL
uMgcsifDmqx70jSOkXzaa82H6Zo/DofPk4lVk4sFurWBXBSrmd2ghOmHfUlVOFKMblIGEr1lw
ERU6SiRFhzfWqqc0U30XWb/8cCqUtBsWsYw5v1xvegSStvopVw9nRLRxrm/97yqv9pQm7rUb6
HwtVCR9DzE92/Tp7vVqWMat4zdl4Jb3U/fdpqALm53oPJQVIG4HJWvFdEhBD7AW9bQTtV2JLB
jZvZArBrvOwRroJYvodW8AiDpkHZ3b9eLfp0ubhXEBSLpeQ/IaxLoIwRMdnn6IsJfic0IMFi1
obg2nHa1rztVtKh9aPbbokyvLv5mSn96mFsbu9p278KL1OTFVCXIJmpifPObZcWFqpLBgDhPW
XoJe7QeUj+7mp1dMJ6wPjwXmAE0cnVx/U5gH7YuYyijwqNgi0cRFBbCXShnOS4mtCRQ6lbbeQ
wIrugKCb1IWk+d8G3lhvKrsPvT+EB0Peickft4af8odh8jVwiFiBiUXHCddvwxy3NCL9bQOiR
HX5/uq9XIp7hAvSCFnL2XL9foFF/Rg+eJIUdP5UnRpgA0WOWdeqHTiQ8t5MNO9d1NkNWmawTs
cEKhOmp1cBZhPG7t07tckoRb/26laTQHRCz1nSfzP2D1sCi7xmKkRK2wf9Udcv1Rb3U2flWJa
cwcWWxP5Fg9xDgcl6ci99z0qx17m/TJOzDmp8OYXZIUZahBf1YYNquacsaNljCdTIybR5Oo9T /QZ+Qs5BdM/Xncvbl8swh4LQ==
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

)

[body] => Google\Service\Gmail\MessagePartBody Object
(
[attachmentId] =>
[data] =>
PGh0bWw-PGhlYWQ-PC9oZWFkPjxib2R5PjxkaXYgc3R5bGU9ImZvbnQtZmFtaWx5OiBWZXJkYW5hO2ZvbnQtc2l6ZTogMTIuMHB4OyI-PGRpdj5Ib2xhIEZlbGlzYSw8L2Rpdj4NCg0KPGRpdj5NZSBndXN0YXImaWFjdXRlO2EgZW5jYXJnYXJ0ZSB1biBwb2xsbyBhc2Fkby48L2Rpdj4NCg0KPGRpdj5VbiBhYnJhem8sPC9kaXY-DQoNCjxkaXY-TWFyJmlhY3V0ZTthPC9kaXY-PC9kaXY-PC9ib2R5PjwvaHRtbD4NCg==
[size] => 235
[internal_gapi_mappings:protected] => Array
(
)

[modelData:protected] => Array
(
)

[processed:protected] => Array
(
)

)

)

)