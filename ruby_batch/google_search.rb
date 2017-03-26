#!/usr/local/bin/ruby2.0
# -*- coding: utf-8 -*-

require 'nokogiri'
require 'open-uri'
require 'uri'
require 'cgi'

escaped_url =URI.escape("https://www.google.com/search?q="クローラー&utf-8&h1=ja")
                        doc =NOKOGIRI:HTML(open(escaped_url))
#検索結果の数
                        #puts doc.xpath()

}