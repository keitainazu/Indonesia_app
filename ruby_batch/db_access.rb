#!/usr/local/bin/ruby2.0
# -*- coding: utf-8 -*-

# Ruby/MySQL を読み込みます。
require 'mysql'

# MySQL に接続します。
my = Mysql.new('mysql111.phy.lolipop.lan', 'LAA0365188', 'Indonesia', 'LAA0365188-indonesia')


# SQL クエリを実行します。
res = my.query('SELECT * from search_targets')

# 結果を表示します。
res.each do |row|
    puts row[0]
end

range =5..10

range.each{|num|
 puts"数字は#{num}です"
}
