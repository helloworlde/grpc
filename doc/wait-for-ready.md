gRPC Wait for Ready Semantics
=============================

If an RPC is issued but the channel is in `TRANSIENT_FAILURE` or `SHUTDOWN`
states, the RPC is unable to be transmitted promptly. By default, gRPC
implementations SHOULD fail such RPCs immediately. This is known as "fail fast,"
but usage of the term is historical. RPCs SHOULD NOT fail as a result of the
channel being in other states (`CONNECTING`, `READY`, or `IDLE`).

如果 RPC 发布，但是 channel状态是 `TRANSIENT_FAILURE` 或 `SHUTDOWN`，这个 RPC 不能及时发送，
gRPC 的默认实现应当立即失败，即 "fail fast"，但是有之前的连接，RPC 不应该以下状态而失败: `CONNECTING`, `READY`, 或 `IDLE`

gRPC implementations MAY provide a per-RPC option to not fail RPCs as a result
of the channel being in `TRANSIENT_FAILURE` state. Instead, the implementation
queues the RPCs until the channel is `READY`. This is known as "wait for ready."
The RPCs SHOULD still fail before `READY` if there are unrelated reasons, such
as the channel is `SHUTDOWN` or the RPC's deadline is reached.

gRPC 实现可以提供一个基于 RPC 的选项，当处于 `TRANSIENT_FAILURE` 状态时不会失败，会将 RPC 排队
直到 channel 处于`READY` 状态，即  "wait for ready"，如果出于不相关的原因，RPC应该在 "READY" 之前仍然失败，
如当 channel 处于 `SHUTDOWN`或者 RPC 到达最后时间期限 
