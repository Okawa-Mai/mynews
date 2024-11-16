<tbody>
                            @foreach($posts as $news)
                                <tr>
                                    <th>{{ $news->id }}</th>
                                    <td>{{ Str::limit($news->title, 100) }}</td>
                                    <td>{{ Str::limit($news->body, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ route('admin.news.edit', ['id' => $news->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ route('admin.news.delete', ['id' => $news->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>